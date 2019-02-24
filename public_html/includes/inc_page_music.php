        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <div class="music">
<?php echo $text; ?>
<?php

    $musiques = new Musics();

    $musics = $musiques->findAll();

?>
                    <h1>Sommaire</h1>
                    <ul>
<?php foreach($musics as $music) { ?>
                        <li><a href="/music/?page=<?php echo $music['music_id']; ?>"><?php echo $music['music_title']; ?></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div id="fleche-droite"><a href="https://music.rondeau-cameira.fr/"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
