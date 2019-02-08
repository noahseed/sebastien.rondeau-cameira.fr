<?php
    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php // Si l'utilisateur n'est PAS un VIP
    if($_SESSION['auth']->is_vip == FALSE) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas un VIP.";
        header('Location: /?page=account');
        exit();
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php echo $text; ?>
<?php
        $select = $pdo->query("SELECT id, title FROM diary");
        $pages  = $select->fetchAll();
?>
                <h1>Sommaire</h1>
                <ul>
<?php foreach($pages as $page) { ?>
                    <li><a href="/diary/?page=<?php echo $page->id; ?>"><?php echo $page->title; ?></a></li>
<?php } ?>
                </ul>
            </div>
            <div id="fleche-droite"><a href="/diary/"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
