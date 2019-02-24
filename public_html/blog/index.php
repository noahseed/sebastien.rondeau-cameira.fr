<?php // On démarre la session AVANT d'écrire du code HTML
    session_start();

    $lang = "fr";
    $og_type = "article";

    // On charge les dépendances
    require '../App/Loader.php';

    // Gestion du cookie "remember"
    require '../includes/inc_gestion_cookie.php';

    // Si page existe
    if(!empty($_GET['page'])) {
        $page_id = $_GET['page'];
    // Sinon, page d'accueil
    } else {
        // Pour la page d'accueil
        $page_id = "1";
    }

    $articles = new Articles();

    $page = $articles->find($page_id);

    $id = $page['article_id'];
    $title = $page['article_title'];
    $date = $page['article_date'];
    $text = $page['article_content'];

    // L'en-tête
    require '../includes/inc_head.php';

    // Le Header
    require 'includes/inc_header.php';

    // Le Menu
    require '../includes/inc_menu_fr.php';

    // La page
    require 'includes/inc_page_blog_page.php';

    // Le Footer
    require '../includes/inc_footer.php';
