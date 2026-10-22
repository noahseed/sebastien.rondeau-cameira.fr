$(function () {
    $(".navbar a, footer a[href^='#']").on("click", function (event) {
        var hash = this.hash;
        var target = hash && document.getElementById(hash.slice(1));

        if (!target || event.ctrlKey || event.metaKey || event.shiftKey || event.altKey) {
            return;
        }

        event.preventDefault();
        var menu = $("#myNavbar");
        var reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

        function scrollToTarget() {
            var top = Math.max(0, $(target).offset().top - $(".navbar").outerHeight() - 10);
            // Animate one scroll root so completion runs once.
            $(document.scrollingElement || document.documentElement).stop(true).animate(
                { scrollTop: top }, reducedMotion ? 0 : 500, function () {
                    if (window.location.hash !== hash) {
                        window.history.pushState(null, "", hash);
                    }
                    if (!target.hasAttribute("tabindex")) {
                        target.setAttribute("tabindex", "-1");
                        $(target).one("blur", function () {
                            target.removeAttribute("tabindex");
                        });
                    }
                    target.focus({ preventScroll: true });
                }
            );
        }

        if (menu.hasClass("in") && $(".navbar-toggle").is(":visible")) {
            menu.one("hidden.bs.collapse", scrollToTarget).collapse("hide");
        } else {
            scrollToTarget();
        }
    });
});
