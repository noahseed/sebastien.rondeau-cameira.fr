<?php
    // Redirection si déjà connecté
    if(isset($_SESSION['auth'])) {
        header('Location: /?page=account');
        exit();
    }

    // Traitement du formulaire
    if(!empty($_POST) && !empty($_POST['username']) && !empty($_POST['password'])) {

        $users = new Users();

        $username = $_POST['username'];
        $user_password = $_POST['password'];

        $user = $users->findRegistred($username);

        if(password_verify($user_password, $user['user_password'])) {
            $_SESSION['auth'] = $user;

            if($_POST['remember']) {
            	$remember_token = str_random(250);
                $users->rememberCookie($remember_token, $user['user_id']);
            }

            header('Location: /?page=account');
            exit();

        } else {
            $_SESSION['flash']['error'] = "Identifiant ou mot de passe incorrect.";
        }
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php

    // Affichage des messages flash
    if(isset($_SESSION['flash'])) {
        foreach($_SESSION['flash'] as $type => $message){
            echo ('<p class="'.$type.'">'.$message.'</p>');
        }
    }

    unset($_SESSION['flash']);
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="username">Pseudo ou Email</label></th>
                            <td><input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) { echo $_POST['username']; } ?>" required autofocus></td>
                        </tr>
                        <tr>
                            <th><label for="password">Mot de passe</label></th>
                            <td><input type="password" name="password" id="password" required /></td>
                        </tr>
                        <tr>
                            <th><label for="remember">Se souvenir de moi</label></th>
                            <td><input type="checkbox" name="remember" id="remember" value="1" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Se connecter</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
