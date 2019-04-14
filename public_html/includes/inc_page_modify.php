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
<?php // Traitement du formulaire
    if(!empty($_POST['id'])) {
        if(empty($_POST['title']) || empty($_POST['content'])) {
            // Si les deux informations n'ont PAS été entrées
            $_SESSION['flash']['error'] = "Vous devez remplir tous champs.";
        } else {
            // Si les deux informations ont été entrées
            $id        = $_POST['id'];
            $new_title = $_POST['title'];
            $new_content  = $_POST['content'];

            if($_GET['type'] == 'blog') {
                $blogs = new Blogs();
                $blog = new Blog();

                $blog->article_id = $id;
                $blog->article_title = $new_title;
                $blog->article_content = $new_content;

                $blogs->edit($blog);
                $_SESSION['flash']['success'] = "Le billet a bien été modifié.";

                header('Location: /?page=account');
                exit();
            } elseif($_GET['type'] == 'tuto') {
                $tutos = new Tutos();
                $tuto = new Tuto();

                $tuto->tuto_id = $id;
                $tuto->tuto_title = $new_title;
                $tuto->tuto_content = $new_content;

                $tutos->edit($tuto);
                $_SESSION['flash']['success'] = "Le tutoriel a bien été modifié.";

                header('Location: /?page=account');
                exit();

            } elseif($_GET['type'] == 'music') {
                $musics = new Musics();
                $music = new Music();

                $music->music_id = $id;
                $music->music_title = $new_title;
                $music->music_content = $new_content;

                $musics->edit($music);
                $_SESSION['flash']['success'] = "La musique a bien été modifiée.";

                header('Location: /?page=account');
                exit();

            } elseif($_GET['type'] == 'diary') {
                $diaries = new Diaries();
                $diary = new Diary();

                $diary->diary_id = $id;
                $diary->diary_title = $new_title;
                $diary->diary_content = $new_content;

                $diaries->edit($diary);
                $_SESSION['flash']['success'] = "La page a bien été modifiée.";

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
                <h1>Sélectionnez le billet à modifier</h1>
                <ul>
<?php foreach($pages as $page) { ?>
                    <li><a href="/?page=modify&type=blog&id=<?php echo $page['article_id']; ?>"><?php echo $page['article_title']; ?></a></li>
<?php } ?>
                </ul>
<?php
            } else { // Si l'id du blog a été précisé
                $id = $_GET['id'];
                $blogs = new Blogs();
                $billet = $blogs->find($id);
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $billet['article_id']; ?></td>
                        </tr>
                        <tr>
                            <th><label for="title">Titre du billet</label></th>
                            <td><input type="text" name="title" id="title" value="<?php echo $billet['article_title']; ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"><?php echo $billet['article_content']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Modifier</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $billet['article_id']; ?>">
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </form>
<?php
            }
        } elseif($_GET['type'] == 'tuto') {
            
            if(!isset($_GET['id'])) { // Si l'id du tuto n'a PAS été précisé
                $tutos = new Tutos();
                $pages = $tutos->findAll();
?>
                <h1>Sélectionnez le tutoriel à modifier</h1>
                <ul>
<?php
                foreach($pages as $page) {
?>
                    <li><a href="/?page=modify&type=tuto&id=<?php echo $page['tuto_id']; ?>"><?php echo $page['tuto_title']; ?></a></li>
<?php
                }
?>
                </ul>
<?php
            } else { // Si l'id du tuto a été précisé
                $id = $_GET['id'];

                $tutos = new Tutos();
                $tuto = $tutos->find($id);
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $tuto['tuto_id']; ?></td>
                        </tr>
                        <tr>
                            <th><label for="title">Titre du tutoriel</label></th>
                            <td><input type="text" name="title" id="title" value="<?php echo $tuto['tuto_title']; ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"><?php echo $tuto['tuto_content']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Modifier</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $tuto['tuto_id']; ?>">
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </form>
<?php
            }
        } elseif($_GET['type'] == 'music') {
            
            if(!isset($_GET['id'])) { // Si l'id de la musique n'a PAS été précisé

                $musics = new Musics();
                $pages = $musics->findAll();
?>
                <h1>Sélectionnez la musique à modifier</h1>
                <ul>
<?php
                foreach($pages as $page) { ?>
                    <li><a href="/?page=modify&type=music&id=<?php echo $page['music_id']; ?>"><?php echo $page['music_title']; ?></a></li>
<?php
                }
?>
                </ul>
<?php
            } else { // Si l'id de la musique a été précisé
                $id = $_GET['id'];
                $musics = new Musics();
                $music = $musics->find($id);
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $music['music_id']; ?></td>
                        </tr>
                        <tr>
                            <th><label for="title">Titre de la musique</label></th>
                            <td><input type="text" name="title" id="title" value="<?php echo $music['music_title']; ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"><?php echo $music['music_content']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Modifier</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $music['music_id']; ?>">
                </form>
                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                            console.error( error );
                        } );
                </script>
<?php
            }
        } elseif($_GET['type'] == 'diary') {
            
            if(!isset($_GET['id'])) { // Si l'id de la musique n'a PAS été précisé

                $diaries = new Diaries();
                $pages = $diaries->findAll();
?>
                <h1>Sélectionnez la page à modifier</h1>
                <ul>
<?php foreach($pages as $page) { ?>
                    <li><a href="/?page=modify&type=diary&id=<?php echo $page['diary_id']; ?>"><?php echo $page['diary_title']; ?></a></li>
<?php } ?>
                </ul>
<?php
            } else { // Si l'id de la page a été précisé
                $id = $_GET['id'];
                $diaries = new Diaries();
                $diary = $diaries->find($id);
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th>ID</th>
                            <td><?php echo $diary['diary_id']; ?></td>
                        </tr>
                        <tr>
                            <th><label for="title">Titre de la page</label></th>
                            <td><input type="text" name="title" id="title" value="<?php echo $diary['diary_title']; ?>"></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"><?php echo $diary['diary_content']; ?></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Modifier</button></td>
                        </tr>
                    </table>
                    <input type="hidden" name="id" value="<?php echo $diary['diary_id']; ?>" />
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </form>
<?php
            }
        } else {
            $_SESSION['flash']['error'] = "Le type de contenu demandé n'existe pas.";
            header('Location: /?page=account');
            exit();
        }
    }
?>
            </div>
        </article>
