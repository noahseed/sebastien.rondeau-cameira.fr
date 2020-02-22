        <div class="menu">
            <div id="hamburger">
                <div id="hamburger-content">
                    <nav>
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li><a href="/?page=blog">Blog</a></li>
                            <li><a href="/?page=tutos">Tutorials</a></li>
                            <li><a href="/?page=music">Music</a></li>
                        </ul>
                        <hr>
                        <ul>
                            <li><a href="/?page=about">Who am I ?</a></li>
                            <li><a href="/?page=cv">My resume</a></li>
                            <li><a href="/?page=contact">Contact-me</a></li>
                            <li><a href="/?page=links">Links</a></li>
                        </ul>
                    </nav>
                    <nav>
                        <ul>
<?php if(isset($_SESSION['auth'])): ?>
<?php // Si l'utilisateur est un VIP
        if($_SESSION['auth']->is_vip == TRUE) {
?>
                            <li><a href="/?page=diary">Diary</a></li>
<?php
        }
?>
                            <li><a href="/?page=account">My account</a></li>
                            <li><a href="/?page=logout">Sign out</a></li>
<?php else: ?>
                            <li><a href="/?page=login">Sign in</a></li>
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
