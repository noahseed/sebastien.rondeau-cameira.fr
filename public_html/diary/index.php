<?php // On démarre la session AVANT d'écrire du code HTML
    session_start();

    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
    // Si l'utilisateur n'est PAS un VIP
    if($_SESSION['auth']->is_vip == FALSE) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas autorisé à voir cette page.";
        header('Location: /?page=account');
        exit();
    }

    $lang = "fr";
    $og_type = "article";
    // On se connecte à la base de données
    require('../includes/inc_db_connexion.php');
    // Gestion du cookie "remember"
    require('../includes/inc_gestion_cookie.php');

    // On prepare la requête 
    $req = $pdo->prepare("SELECT * FROM diary WHERE id = ?");

    // Si page existe
    if(!empty($_GET['page'])) {
        $page_id = $_GET['page'];
    // Sinon, page d'accueil
    } else {
        // Pour la page d'accueil
        $page_id = "1";

    }
        $req->execute([$page_id]);
        $page = $req->fetch();

        $id = $page->id;
        $title = $page->title;
        $date = $page->date;
        $text = $page->text;

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
?>
