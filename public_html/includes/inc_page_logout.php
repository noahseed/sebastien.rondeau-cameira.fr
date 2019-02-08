<?php
	setcookie("remember", NULL, -1);

    unset($_SESSION['auth']);

    $_SESSION['flash']['success'] = "Vous êtes maintenant déconnecté.";

    header('Location: /?page=login');
    exit();
