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
            <div id="fleche-gauche"><a href="/music/?page=<?php echo $prec; ?>"><img src="/images/pixel.gif" alt="Page Précédente"></a></div>
<?php } else { ?>
            <div id="fleche-gauche"><a href="/?page=music"><img src="/images/pixel.gif" alt="Page Précédente"></a></div>
<?php } ?>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <iframe class="youtube" src="https://www.youtube.com/embed/<?php echo $text; ?>?rel=0" frameborder="0" allowfullscreen></iframe>
            </div>
<?php
    $suiv = $page_id + 1;

    // On demande à la base si une page suivante existe
    $musics = new Musics();

    $page_suiv = $musics->find($suiv);

    if (!empty($page_suiv)) {
        $number = $page_suiv['music_id'];
    }

    if(isset($number) && $number==$suiv) {
?>
            <div id="fleche-droite"><a href="/music/?page=<?php echo $suiv; ?>"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
<?php } ?>
        </article>
