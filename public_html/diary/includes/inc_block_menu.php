        <div class="menu">
            <nav>
                <ul>
                    <li><a href="/">Accueil</a></li>
                    <li><a href="/?page=blog">Blog</a></li>
                    <li><a href="/?page=tutos">Tutoriels</a></li>
                    <li><a href="/?page=music">Musique</a></li>
                </ul>
                <hr />
                <ul>
                    <li><a href="/?page=about">Qui suis-je ?</a></li>
                    <li><a href="/?page=cv">Mon C.V.</a></li>
                    <li><a href="/?page=contact">Contactez-moi</a></li>
                    <li><a href="/?page=donations">Me soutenir</a></li>
                    <li><a href="/?page=links">Liens</a></li>
                </ul>
            </nav>
            <nav>
                <ul>
<?php if(isset($_SESSION['auth'])): ?>
<?php // Si l'utilisateur est un VIP
        if($_SESSION['auth']->is_vip == TRUE) {
?>
                    <li><a href="/?page=diary">Journal</a></li>
<?php
        }
?>
                    <li><a href="/?page=account">Mon compte</a></li>
                    <li><a href="/?page=logout">Se déconnecter</a></li>
<?php else: ?>
                    <li><a href="/?page=login">Se connecter</a></li>
<?php endif; ?>
                </ul>
            </nav>
            <div style="text-align:center;padding:1em 0;">
                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=fr&size=small&timezone=Europe%2FParis" width="100%" height="90" frameborder="0" seamless></iframe>
            </div>
        </div>
