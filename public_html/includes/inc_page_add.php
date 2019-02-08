<?php require('functions.php'); ?>
<?php
    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }
?>
<?php // Si l'utilisateur n'est PAS un admin
    if($_SESSION['auth']->is_admin == FALSE) {
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
                if(empty($_POST['text'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte du billet.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $text_blog = $_POST['text'];

                    $pdo->prepare("INSERT blog SET title = ?, text = ?")->execute([$title, $text_blog]);

                    $_SESSION['flash']['success'] = "Le billet a été ajouté au blog.";
                    header('Location: /?page=account');
                    exit();
                }
            }
        } elseif($_GET['type'] == 'tuto') {
            $type = 'tuto';
            $title = 'Ajouter un Tutoriel';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['text'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte du tutoriel.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $text_tuto = $_POST['text'];

                    $pdo->prepare("INSERT tutos SET title = ?, text = ?")->execute([$title, $text_tuto]);

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
                    $text = '<iframe class="youtube" src="https://www.youtube.com/embed/'.$serial.'?rel=0" allowfullscreen></iframe>';

                    $pdo->prepare("INSERT music SET title = ?, text = ?")->execute([$title, $text]);

                    $_SESSION['flash']['success'] = "La musique a été ajoutée.";
                    header('Location: /?page=account');
                    exit();
                }
            }
        } elseif($_GET['type'] == 'diary') {
            $type = 'diary';
            $title = 'Ajouter une page dans le journal';

            if(!empty($_POST['title'])) { // Si on reçoit du contenu
                if(empty($_POST['text'])) {
                    // Si les deux informations n'ont PAS été entrées
                    $_SESSION['flash']['error'] = "Vous devez entrer le texte de la page.";
                } else {
                    // Si les deux informations ont été entrées
                    $title  = $_POST['title'];
                    $text_diary = $_POST['text'];

                    $pdo->prepare("INSERT diary SET title = ?, text = ?")->execute([$title, $text_diary]);

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
                            <td><input type="text" name="title" id="title" required /></td>
                        </tr>
                        <tr>
                            <th><label for="text">Texte</label></th>
                            <td><textarea name="text" id="editor"></textarea></td>
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
                            <td><input type="text" name="title" id="title" required /></td>
                        </tr>
                        <tr>
                            <th><label for="text">Texte</label></th>
                            <td><textarea name="text" id="editor"></textarea></td>
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
                            <td><input type="text" name="title" id="title" required /></td>
                        </tr>
                        <tr>
                            <th><label for="serial">Slug YouTube</label></th>
                            <td><input type="text" name="serial" id="serial" required /></td>
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
                            <td><input type="text" name="title" id="title" required /></td>
                        </tr>
                        <tr>
                            <th><label for="text">Texte</label></th>
                            <td><textarea name="text" id="editor"></textarea></td>
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
