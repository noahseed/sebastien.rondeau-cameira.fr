<?php // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php // Si l'utilisateur n'est PAS un admin
    if($_SESSION['auth']['user_is_admin'] == FALSE) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas administrateur.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php // Traitement du formaulaire
    if(!empty($_GET['id'])) {
        if(empty($_GET['type'])) {
            // Si le type n'a PAS été entré
            $_SESSION['flash']['error'] = "Vous devez spécifier le type.";
        } else {
            // Si les deux informations ont été entrées
            $id = $_GET['id'];

            if($_GET['type'] == 'blog') {
                $blogs = new Blogs();
                $blogs->delete($id);

                $_SESSION['flash']['success'] = "Le billet a bien été supprimé.";
                header('Location: /?page=account');
                exit();

            } elseif($_GET['type'] == 'tuto') {
                $tutos = new Tutos();
                $tutos->delete($id);

                $_SESSION['flash']['success'] = "Le tutoriel a bien été supprimé.";
                header('Location: /?page=account');
                exit();

            } elseif($_GET['type'] == 'music') {
                $musics = new Musics();
                $musics->delete($id);

                $_SESSION['flash']['success'] = "La musique a bien été supprimée.";
                header('Location: /?page=account');
                exit();
            } elseif($_GET['type'] == 'diary') {
                $pdo->query("DELETE FROM diary WHERE id = $id");

                $_SESSION['flash']['success'] = "La page a bien été supprimée.";
                header('Location: /?page=account');
                exit();

            } else {
                // Si le type n'existe pas
                $_SESSION['flash']['error'] = "Le type n'est pas reconnu.";
                header('Location: /?page=login');
                exit();
            }
        }
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php // Message(s) flash
    if(isset($_SESSION['flash'])) {
        foreach($_SESSION['flash'] as $type => $message){
            echo ('<p class="'.$type.'">'.$message.'</p>');
        }
    }
    unset($_SESSION['flash']);
?>
<?php
    if(!isset($_GET['type'])) { // Si le type n'a pas été défini
        $_SESSION['flash']['error'] = "Vous n'avez pas défini le type.";
        header('Location: /?page=account');
        exit();
    } else {
        if($_GET['type'] == 'blog') {
            if(!isset($_GET['id'])) { // Si l'id du blog n'a PAS été précisé

                $blogs = new Blogs();
                $pages = $blogs->findAll();
?>
                <h1>Sélectionnez le billet à supprimer</h1>
                <ul>
<?php
                foreach($pages as $page) {
?>
                    <li><a href="/?page=delete&type=blog&id=<?php echo $page['article_id']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette page ?');"><?php echo $page['article_title']; ?></a></li>
<?php
                }
?>
                </ul>
<?php
            } else { // Si l'id du blog a été précisé

            }
        } elseif($_GET['type'] == 'tuto') {
            
            if(!isset($_GET['id'])) { // Si l'id du tuto n'a PAS été précisé
                $tutos = new Tutos();
                $pages = $tutos->findAll();
?>
                <h1>Sélectionnez le tutoriel à supprimer</h1>
                <ul>
<?php
                foreach($pages as $page) {
?>
                    <li><a href="/?page=delete&type=tuto&id=<?php echo $page['tuto_id']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette page ?');"><?php echo $page['tuto_title']; ?></a></li>
<?php
                }
?>
                </ul>
<?php
            } else { // Si l'id du tuto a été précisé

            }
        } elseif($_GET['type'] == 'music') {
            
            if(!isset($_GET['id'])) { // Si l'id de la musique n'a PAS été précisé

                $musics = new Musics();
                $pages = $musics->findAll();
?>
                <h1>Sélectionnez la musique à supprimer</h1>
                <ul>
<?php
                foreach($pages as $page) { ?>
                    <li><a href="/?page=delete&type=music&id=<?php echo $page['music_id']; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette page ?');"><?php echo $page['music_title']; ?></a></li>
<?php
                }
?>
                </ul>
<?php
            } else { // Si l'id de la musique a été précisé

            }
        } elseif($_GET['type'] == 'diary') {
            
            if(!isset($_GET['id'])) { // Si l'id du tuto n'a PAS été précisé

                $req = $pdo->query("SELECT id, title FROM diary");
                $pages  = $req->fetchAll();
?>
                <h1>Sélectionnez la page à supprimer</h1>
                <ul>
<?php foreach($pages as $page) { ?>
                    <li><a href="/?page=delete&type=diary&id=<?php echo $page->id; ?>" onclick="return confirm('Voulez-vous vraiment supprimer cette page ?');"><?php echo $page->title; ?></a></li>
<?php } ?>
                </ul>
<?php
            } else { // Si l'id de la page a été précisé
                $id = $_GET['id'];
                $req = $pdo->query("SELECT * FROM diary WHERE id = $id");
                $diary = $req->fetch();
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $diary->id; ?></td>
                        </tr>
                        <tr>
                            <th><label for="title">Titre de la page</label></th>
                            <td><input type="text" name="title" id="title" value="<?php echo $diary->title; ?>" /></td>
                        </tr>
                        <tr>
                            <th><label for="text">Texte</label></th>
                            <td><textarea name="text" id="text" rows="30" cols="80"><?php echo $diary->text; ?></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Modifier</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $diary->id; ?>" />
                </form>
<?php } ?>
<?php
        } else {
            $_SESSION['flash']['error'] = "Le type de contenu demandé n'existe pas.";
            header('Location: /?page=account');
            exit();
        }
    }
?>
            </div>
        </article>
