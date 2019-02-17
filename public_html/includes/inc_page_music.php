        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <div class="music">
<?php echo $text; ?>
<?php
        $select = $pdo->query("SELECT id, title FROM music ORDER BY title");
        $musics  = $select->fetchAll();
?>
                    <h1>Sommaire</h1>
                    <ul>
<?php foreach($musics as $music) { ?>
                        <li><a href="/music/?page=<?php echo $music->id; ?>"><?php echo $music->title; ?></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div id="fleche-droite"><a href="https://music.rondeau-cameira.fr/"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
