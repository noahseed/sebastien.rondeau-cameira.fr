const assert = require('node:assert/strict');
const { test } = require('node:test');
const { createServer } = require('node:http');
const { readFile } = require('node:fs/promises');
const path = require('node:path');
const { chromium } = require('playwright');

const root = path.resolve(__dirname, '..');
const types = { '.html': 'text/html', '.css': 'text/css', '.js': 'text/javascript', '.webp': 'image/webp', '.jpg': 'image/jpeg', '.png': 'image/png', '.ico': 'image/x-icon', '.webmanifest': 'application/manifest+json' };

test('Navigation, accessibilité, images et carrousel', { timeout: 180000 }, async () => {
    const server = createServer(async (request, response) => {
        try {
            const url = new URL(request.url, 'http://localhost');
            const file = path.resolve(root, '.' + decodeURIComponent(url.pathname === '/' ? '/index.html' : url.pathname));
            if (!file.startsWith(root + path.sep)) {
                response.writeHead(403).end();
                return;
            }
            const data = await readFile(file);
            response.writeHead(200, { 'Content-Type': types[path.extname(file)] || 'application/octet-stream' });
            response.end(data);
        } catch {
            response.writeHead(404).end();
        }
    });
    await new Promise(resolve => server.listen(0, '127.0.0.1', resolve));
    const url = `http://127.0.0.1:${server.address().port}`;
    let browser;
    try {
        browser = await chromium.launch({
            executablePath: process.env.PLAYWRIGHT_CHROMIUM_EXECUTABLE || undefined
        });
        const page = await browser.newPage({ reducedMotion: 'reduce' });
        const errors = [];
        page.on('pageerror', error => errors.push(error.message));
        page.on('console', message => { if (message.type() === 'error') errors.push(message.text()); });
        const ids = ['moi', 'languages', 'experience', 'formations', 'portfolio', 'citations'];
        async function current(id) {
            await page.waitForFunction(id => {
                const links = document.querySelectorAll('.navbar a[aria-current="location"]');
                return links.length === 1 && links[0].hash === '#' + id && links[0].parentElement.classList.contains('active');
            }, id);
        }
        for (const width of [320, 390, 768, 1024, 1440]) {
            await page.setViewportSize({ width, height: 800 });
            await page.goto(url);
            await current('moi');
            await page.evaluate(() => document.fonts.ready);
            assert(await page.evaluate(() => document.documentElement.scrollWidth <= innerWidth), `Débordement à ${width}px`);
            for (const id of ids) {
                if (width < 768) {
                    await page.locator('.navbar-toggle').click();
                    await page.waitForFunction(() => document.getElementById('myNavbar').classList.contains('in'));
                }
                await page.locator(`.navbar a[href="#${id}"]`).click();
                await current(id);
                await page.waitForFunction(id => document.activeElement.id === id && location.hash === '#' + id, id);
                if (width < 768) {
                    assert.equal(await page.locator('.navbar-toggle').getAttribute('aria-expanded'), 'false');
                }
            }
            for (const id of ids) {
                await page.evaluate(id => {
                    const target = document.getElementById(id);
                    window.scrollTo(0, target.getBoundingClientRect().top + scrollY - document.querySelector('nav').getBoundingClientRect().height - 10);
                }, id);
                await current(id);
            }
        }
        // Regression: resizing an expanded mobile menu must not inflate the offset.
        await page.setViewportSize({ width: 390, height: 800 });
        await page.goto(url);
        await current('moi');
        await page.locator('.navbar-toggle').click();
        await page.waitForFunction(() => document.getElementById('myNavbar').classList.contains('in'));
        await page.setViewportSize({ width: 390, height: 700 });
        await page.waitForFunction(() => {
            const offset = jQuery('body').data('bs.scrollspy').options.offset;
            const nav = document.querySelector('nav').getBoundingClientRect().height;
            const menu = document.getElementById('myNavbar').getBoundingClientRect().height;
            return Math.abs(offset - (nav - menu + 20)) < 1;
        });
        await page.locator('.navbar a[href="#experience"]').click();
        await current('experience');
        await page.locator('.right.carousel-control').focus();
        await page.keyboard.press('Space');
        await page.waitForFunction(() => document.querySelector('.item.active').textContent.includes('Je suis'));
        await page.locator('.left.carousel-control').focus();
        await page.keyboard.press('Enter');
        await page.waitForFunction(() => document.querySelector('.item.active').textContent.includes('moustique'));
        await page.locator('.carousel-indicators button').nth(2).focus();
        await page.keyboard.press('Enter');
        await page.waitForFunction(() => document.querySelector('.item.active').textContent.includes('Ubuntu'));
        await page.locator('footer a[href="#moi"]').click();
        await current('moi');
        assert(await page.locator('main img').evaluateAll(images => images.every(image => image.width > 0 && image.hasAttribute('width') && image.hasAttribute('height'))));
        assert(await page.locator('#portfolio img').evaluateAll(images => images.every(image => image.loading === 'lazy')));
        assert.equal(await page.locator('link[rel="canonical"]').getAttribute('href'), 'https://sebastien.rondeau-cameira.fr/');
        assert.equal(await page.locator('[integrity][crossorigin="anonymous"]').count(), 3);
        // The skip link remains useful without JavaScript.
        const noScript = await browser.newContext({ javaScriptEnabled: false });
        const accessible = await noScript.newPage();
        await accessible.goto(url);
        await accessible.keyboard.press('Tab');
        assert.equal(await accessible.locator('.skip-link').evaluate(element => element === document.activeElement), true);
        await accessible.keyboard.press('Enter');
        assert.equal(await accessible.locator('main').evaluate(element => element === document.activeElement), true);
        await noScript.close();
        assert.deepEqual(errors, []);
    } finally {
        if (browser) await browser.close();
        await new Promise(resolve => server.close(resolve));
    }
});
