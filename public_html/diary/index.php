<?php // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
    // Si l'utilisateur n'est PAS un VIP
    if($_SESSION['auth']['user_is_vip'] == FALSE) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas autorisé à voir cette page.";
        header('Location: /?page=account');
        exit();
    }

    $lang = "fr";
    $og_type = "article";

    // On charge les dépendances
    require '../App/Loader.php';

    // Gestion du cookie "remember"
    require '../includes/inc_gestion_cookie.php';

    // On prepare la requête
    $diaries = new Diaries();

    // Si page existe
    if(!empty($_GET['page'])) {
        $page_id = $_GET['page'];
    // Sinon, page d'accueil
    } else {
        // Pour la page d'accueil
        $page_id = "1";
    }

	$page = $diaries->find($page_id);

    $id = $page['diary_id'];
    $title = $page['diary_title'];
    $date = $page['diary_date'];
    $text = $page['diary_content'];

    // L'en-tête
    require('includes/inc_head.php');
    // Le Header
    require('includes/inc_header.php');
    // Le Menu
    require('includes/inc_block_menu.php');
    // La page
    require('includes/inc_page_diary_page.php');
    // Le Footer
    require('../includes/inc_footer.php');
