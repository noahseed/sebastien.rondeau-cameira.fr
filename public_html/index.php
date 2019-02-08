<?php
    // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // Gestion des langues
    require('includes/inc_gestion_lang.php');

    // On se connecte à la base de données
    require('includes/inc_db_connexion.php');

    // Gestion du cookie "remember"
    require('includes/inc_gestion_cookie.php');

    // Choix de la base en fonction de la langue
    if($lang == 'fr') {
        $req = $pdo->prepare("SELECT * FROM site_fr WHERE slug = :slug");
    } elseif($lang == 'en') {
        $req = $pdo->prepare("SELECT * FROM site_en WHERE slug = :slug");
    } elseif($lang == 'pt') {
        $req = $pdo->prepare("SELECT * FROM site_pt WHERE slug = :slug");
    }

    if (!empty($_GET['page'])) {
        $slug = $_GET['page'];
        $og_type = "article";
    }
    else {
        $slug = "home";
        $og_type = "website";
    }

    // On récupère le contenu de la base
    $req->execute(['slug' => $slug]);
    $page = $req->fetch();

    $title = $page->title;
    $text = $page->text;

    // Si la base ne renvoie rien
    if(empty($title)) {
        header('Location: /?page=404');
        exit();
    }

    // L'en-tête
    require('includes/inc_head.php');
    // Le Header
    require('includes/inc_header.php');
    // Le Menu
    require('includes/inc_block_menu.php');
    // Les pages du site
    require('includes/inc_page_'.$slug.'.php');
    // Le Footer
    require('includes/inc_footer.php');
