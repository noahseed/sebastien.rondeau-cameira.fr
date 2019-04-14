<?php
    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php
    // Si l'utilisateur n'est PAS un admin
    if($_SESSION['auth']['user_is_admin'] == FALSE) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas administrateur.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php
    // Si type = blog
    if(!empty($_GET['type'])) {
        if($_GET['type'] == 'blog') {
            $type = 'blog';
            $title = 'Ajouter un billet dans le Blog';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['content'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte du billet.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $blog_content = $_POST['content'];

                    $blogs = new Blogs();
                    $blog = new Blog();
                    $blog->article_title = $title;
                    $blog->article_content = $blog_content;

                    $blogs->add($blog);
                    $_SESSION['flash']['success'] = "Le billet a été ajouté au blog.";

                    header('Location: /?page=account');
                    exit();
                }
            }
        } elseif($_GET['type'] == 'tuto') {
            $type = 'tuto';
            $title = 'Ajouter un Tutoriel';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['content'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte du tutoriel.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $text_tuto = $_POST['content'];

                    $tutos = new Tutos();
                    $tuto = new Tuto();
                    $tuto->tuto_title = $title;
                    $tuto->tuto_content = $text_tuto;

                    $tutos->add($tuto);
                    $_SESSION['flash']['success'] = "Le tutoriel a été ajouté.";

                    header('Location: /?page=account');
                    exit();
                }
            }
        } elseif($_GET['type'] == 'music') {
            $type = 'music';
            $title = 'Ajouter une musique YouTube';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['serial'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le serial.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $serial = $_POST['serial'];
                    $content = $serial;

                    $musics = new Musics();
                    $music = new Music();
                    $music->music_title = $title;
                    $music->music_content = $content;

                    $musics->add($music);

                    $_SESSION['flash']['success'] = "La musique a été ajoutée.";
                    header('Location: /?page=account');
                    exit();
                }
            }
        } elseif($_GET['type'] == 'diary') {
            $type = 'diary';
            $title = 'Ajouter une page dans le journal';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['content'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte de la page.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $text_diary = $_POST['content'];
                    $slug = str_random(6);

                    $diaries = new Diaries();
                    $diary = new Diary();
                    $diary->diary_slug = $slug;
                    $diary->diary_title = $title;
                    $diary->diary_content = $text_diary;

                    $diaries->add($diary);

                    $_SESSION['flash']['success'] = "La page a été ajoutée.";
                    header('Location: /?page=account');
                    exit();
                }
            }
        }
    } else {
        $_SESSION['flash']['error'] = "Vous n'avez pas choisi le type de page à ajouter.";
        header('Location: /?page=login');
        exit();
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php
    // Si message(s) flash
    if(isset($_SESSION['flash'])) {
        foreach($_SESSION['flash'] as $type => $message){
            echo ('<p class="'.$type.'">'.$message.'</p>');
        }
    }
    unset($_SESSION['flash']);
?>
<?php echo $text; ?>
<?php
    if(!empty($type)) {
        if($type == 'blog') {
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="title">Titre du billet</label></th>
                            <td><input type="text" name="title" id="title" required></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Ajouter</button></td>
                        </tr>
                    </table>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </form>
<?php
        } elseif($type == 'tuto') {
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="title">Nom du tutoriel</label></th>
                            <td><input type="text" name="title" id="title" required></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Ajouter</button></td>
                        </tr>
                    </table>
                    <script>
                        ClassicEditor
                            .create( document.querySelector( '#editor' ) )
                            .catch( error => {
                                console.error( error );
                            } );
                    </script>
                </form>
<?php
        } elseif($type == 'music') {
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="title">Artiste - Titre</label></th>
                            <td><input type="text" name="title" id="title" required></td>
                        </tr>
                        <tr>
                            <th><label for="serial">Slug YouTube</label></th>
                            <td><input type="text" name="serial" id="serial" required></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Ajouter</button></td>
                        </tr>
                    </table>
                </form>
<?php
        } elseif($type == 'diary') {
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="title">Nom de la page</label></th>
                            <td><input type="text" name="title" id="title" required></td>
                        </tr>
                        <tr>
                            <th><label for="content">Texte</label></th>
                            <td><textarea name="content" id="editor"></textarea></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Ajouter</button></td>
                        </tr>
                    </table>
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
    }
?>
            </div>
        </article>
