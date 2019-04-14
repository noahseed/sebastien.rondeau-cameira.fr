<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // Gestion des langues
    require './includes/inc_gestion_lang.php';

    // On charge les dépendances
    require './App/Loader.php';

    // Gestion du cookie "remember"
    require './includes/inc_gestion_cookie.php';


    if (!empty($_GET['page'])) {
        $slug = $_GET['page'];
        $og_type = "article";
    }
    else {
        $slug = "home";
        $og_type = "website";
    }

    $pages = new Pages();

    // Choix de la base en fonction de la langue
    if($lang == 'en') {
        $page = $pages->findEn($slug);
    } elseif($lang == 'pt') {
        $page = $pages->findPt($slug);
    } else {
        $page = $pages->findFr($slug);
    }

    // On récupère le contenu de la base
    $title = $page['page_title'];
    $text = $page['page_content'];

    // Si la base ne renvoie rien
    if(empty($title)) {
        header('Location: /?page=404');
        exit();
    }

    // L'en-tête
    require './includes/inc_head.php';
    // Le Header
    require './includes/inc_header.php';
    // Le Menu
    require './includes/inc_block_menu.php';
    // Les pages du site
    require './includes/inc_page_'.$slug.'.php';
    // Le Footer
    require './includes/inc_footer.php';
