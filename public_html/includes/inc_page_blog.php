        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <div class="blog">
<?php echo $text; ?>
<?php
        $select = $pdo->query("SELECT id, title FROM blog");
        $pages  = $select->fetchAll();
?>
                    <h1>Sommaire</h1>
                    <ul>
<?php foreach($pages as $page) { ?>
                        <li><a href="/blog/?page=<?php echo $page->id; ?>"><?php echo $page->title; ?></a></li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div id="fleche-droite"><a href="/blog/"><img src="/images/pixel.gif" alt="Page Suivante"></a></div>
        </article>
