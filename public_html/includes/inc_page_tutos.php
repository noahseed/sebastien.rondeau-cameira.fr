        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <div class="tutos">
<?php echo $text; ?>
<?php

        $tutoriels = new Tutos();

        $tutos  = $tutoriels->findAll();

?>
                    <h1>Sommaire</h1>
                    <ul>
<?php foreach($tutos as $tuto) { ?>
                        <li><a href="/tutos/?page=<?php echo $tuto['tuto_id']; ?>"><?php echo $tuto['tuto_title']; ?></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div id="fleche-droite"><a href="/tutos/"><img src="images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
