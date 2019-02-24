        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <div class="blog">
<?php echo $text; ?>
<?php
        $articles = new Articles();

        $pages  = $articles->findAll();
?>
                    <h1>Sommaire</h1>
                    <ul>
<?php foreach($pages as $page) { ?>
                        <li><a href="/blog/?page=<?php echo $page['article_id']; ?>"><?php echo $page['article_title']; ?></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div id="fleche-droite"><a href="/blog/"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
