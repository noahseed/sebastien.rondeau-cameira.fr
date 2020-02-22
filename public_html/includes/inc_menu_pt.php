        <div class="menu">
            <div id="hamburger">
                <div id="hamburger-content">
                    <nav>
                        <ul>
                            <li><a href="/">Bem-vindo</a></li>
                            <li><a href="/?page=blog">Blog</a></li>
                            <li><a href="/?page=tutos">Tutoriais</a></li>
                            <li><a href="/?page=music">Música</a></li>
                        </ul>
                        <hr>
                        <ul>
                            <li><a href="/?page=about">Quem sou eu ?</a></li>
                            <li><a href="/?page=cv">Meu Curriculum</a></li>
                            <li><a href="/?page=contact">Contacte-me</a></li>
                            <li><a href="/?page=links">Endereços</a></li>
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
                            <li><a href="/?page=account">Minha conta</a></li>
                            <li><a href="/?page=logout">Desconectar</a></li>
<?php else: ?>
                            <li><a href="/?page=login">Conectar</a></li>
<?php endif; ?>
                        </ul>
                    </nav>
                </div>
                <div id="hamburger-sidebar">
                    <div id="hamburger-sidebar-body"></div>
                </div>
                <div id="hamburger-overlay"></div>
                <button id="hamburger-button"> &#9776; </button>
            </div>
        </div>
        <script type="text/javascript" src="/js/hamburger.js"></script>
