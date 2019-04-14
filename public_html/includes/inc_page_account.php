<?php
    // Logged Only
    if(!isset($_SESSION['auth'])) {
        $_SESSION['flash']['error'] = "Vous n'êtes pas connecté.";
        header('Location: /?page=login');
        exit();
    }

    $users = new Users();
?>
<?php
    // Traitement du formulaire de modification de mot de passe
    if(!empty($_POST['password'])) { // Si on reçoit du contenu
        if($_POST['password'] != $_POST['password_confirm']) {
            // Si password et password_confirm ne correspondent pas
            $_SESSION['flash']['error'] = "Les mots de passes ne correspondent pas.";
        } else {
            // Si password et password_confirm correspondent
            $user_id  = $_SESSION['auth']['user_id'];
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

            $users->edit($password, $user_id);

            $_SESSION['flash']['success'] = "Votre mot de passe a bien été mis à jour.";
        }
    }
?>
    <article>
        <div class="title"><?php echo $title; ?></div>
        <div class="article">
            <h1>Bonjour <?php echo ucfirst(strtolower($_SESSION['auth']['user_username'])); ?> !</h1>
<?php
    // Si message(s) flash
    if(isset($_SESSION['flash'])) {
        foreach($_SESSION['flash'] as $type => $message){
            echo ('<p class="'.$type.'">'.$message.'</p>');
        }
    }
    unset($_SESSION['flash']);
?>
<?php // Si l'utilisateur est un admin
    if($_SESSION['auth']['user_is_admin'] == TRUE) {
        // Affichage des options
        $utilisateurs  = $users->findAll();
?>
            <table>
                <tr>
                    <th>Utilisateurs</th>
                    <th>Ajouter</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                </tr>
                <tr>
                    <td>
                        <ul>
<?php
		foreach($utilisateurs as $user) {
?>
                            <li><?php echo ucfirst(strtolower($user['user_username'])); ?></li>
<?php
		}
?>
                        </ul>
                    </td>
                    <td>
                        <ul>
                            <li><a href="/?page=add&type=blog">Un billet</a></li>
                            <li><a href="/?page=add&type=tuto">Un tutoriel</a></li>
                            <li><a href="/?page=add&type=music">Une musique</a></li>
                            <li><a href="/?page=add&type=diary">Une page</a></li>
                        </ul>      
                    </td>
                    <td>
                        <ul>
                            <li><a href="/?page=modify&type=blog">Un billet</a></li>
                            <li><a href="/?page=modify&type=tuto">Un tutoriel</a></li>
                            <li><a href="/?page=modify&type=music">Une musique</a></li>
                            <li><a href="/?page=modify&type=diary">Une page</a></li>
                        </ul>      
                    </td>
                    <td>
                        <ul>
                            <li><a href="/?page=delete&type=blog">Un billet</a></li>
                            <li><a href="/?page=delete&type=tuto">Un tutoriel</a></li>
                            <li><a href="/?page=delete&type=music">Une musique</a></li>
                            <li><a href="/?page=delete&type=diary">Une page</a></li>
                        </ul>      
                    </td>
                </tr>
            </table>
            <form method="POST">
	            <table>
	                <tr>
	                    <th>Modification de<br>votre mot de passe</th>
	                </tr>
	                <tr>
	                    <td>
	                        <input type="password" name="password" placeholder="Mot de passe"><br>
	                        <input type="password" name="password_confirm" placeholder="Confirmation">
	                    </td>
	                </tr>
	                <tr>
	                    <td><button type="submit">Changer de mot de passe</button></td>
	                </tr>
	            </table>
            </form>
<?php
    } else {
        echo $text;
    }
?>
        </div>
    </article>
