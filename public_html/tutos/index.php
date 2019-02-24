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

    $tutos = new Tutos();

    $page = $tutos->find($page_id);

    $id = $page['tuto_id'];
    $title = $page['tuto_title'];
    $text = $page['tuto_content'];

    // L'en-tête
    require '../includes/inc_head.php';

    // Le Header
    require 'includes/inc_header.php';

    // Le Menu
    require '../includes/inc_menu_fr.php';

    // La page
    require 'includes/inc_page_tuto_page.php';

    // Le Footer
    require '../includes/inc_footer.php';
