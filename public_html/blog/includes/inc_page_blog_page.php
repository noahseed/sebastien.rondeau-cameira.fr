<?php
    // Redirection 404
    if(!empty($page_id)) {
        if($id != $page_id) {
            header('Location: /?page=404');
            exit;
        }
    }
?>
        <article>
<?php
    if($page_id > 1) {
        $prec = $page_id - 1;
?>
            <div id="fleche-gauche"><a href="/blog/?page=<?php echo $prec; ?>"><img src="/images/pixel.gif" alt="Page Précédente"></a></div>
<?php } else { ?>
            <div id="fleche-gauche"><a href="/?page=blog"><img src="/images/pixel.gif" alt="Page Précédente"></a></div>
<?php } ?>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php echo $text; ?>
            </div>
<?php
    $suiv = $page_id + 1;

    // On demande à la base si une page suivante existe
    $articles = new Articles();

    $page_suiv = $articles->find($suiv);

    if (!empty($page_suiv)) {
        $number = $page_suiv['article_id'];
    }

    if(isset($number) && $number==$suiv) {
?>
            <div id="fleche-droite"><a href="/blog/?page=<?php echo $suiv; ?>"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
<?php } ?>
        </article>
