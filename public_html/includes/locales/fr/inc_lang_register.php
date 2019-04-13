<?php

	// Traitement du formulaire
    if(!empty($_POST) && empty($_POST['lang'])) {
        $errors = array();

    	//$user = new User();

        $users = new Users();

        if(empty($_POST['username'])) {

            $errors['username'] = "Vous devez entrer un pseudo.";

        } else {

            if(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {

                $errors['username'] = "Votre pseudo n'est pas valide.";

            } else {

            	$user = $users->findUser($_POST['username']);

                if($user) {
                    $errors['username'] = "Ce pseudo est déjà pris.";
                }
            }
        }

        if(empty($_POST['email'])) {

            $errors['email'] = "Vous devez entrer une adresse email.";

        } else {

            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

                $errors['email'] = "Votre adresse email n'est pas valide";

            } else {

            	$email = $users->findUser($_POST['email']);

                if($email) {
                    $errors['email'] = "Cette adresse email est déjà dans la base de données.";
                }
            }
        }

        if(empty($_POST['password'])) {
            $errors['password'] = "Vous devez entrer un mot de passe.";
        }

        if($_POST['password'] != $_POST['password_confirm']) {
            $errors['password'] = "Les mots de passe ne correspondent pas.";
        }

        // Si le formulaire est correct
        if(empty($errors)) {

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $token    = str_random(60);

        	$user = new User();

            $user->user_username = $_POST['username'];
        	$user->user_email = $_POST['email'];
        	$user->user_password = $password;
        	$user->user_confirmation_token = $token;

            $users->add($user); //$pdo->lastInsertId();

            $users = new Users();

            $user1 = $users->findUser($_POST['email']);
            $user_id = $user1->user_id;

            // Puis on envoie le mail de confirmation
            $subject  = "Merci de confirmer votre inscription";
            $to       = $_POST['email'];
            $frommail = "sebastien@rondeau-cameira.fr";
            $fromname = "Sébastien RONDEAU-CAMEIRA";

            $htmlmess = "<html>\r\n
    <head>\r\n
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>\r\n
        <title>".$subject."</title>\r\n
    </head>\r\n
    <body>\r\n
        <table style='color: white; border: 1px solid; border-style: outset; border-radius: 30px;
        border-color: whitesmoke; background-color: #4d4d4d; text-shadow: 2px 2px 4px black; box-shadow: 5px 5px 7px black;'>\r\n
            <tr>\r\n
                <td><a href='https://sebastien.rondeau-cameira.fr'><img src='https://sebastien.rondeau-cameira.fr/images/aum_blanc.png'
                width='70px' height='70px'></a></td>\r\n
                <td><h1>sebastien.rondeau-cameira.fr</h1></td>\r\n
            </tr>\r\n
        </table>\r\n
        <br />\r\n
        <table style='color: white; border: 1px solid; border-style: outset; border-radius: 30px;
        border-color: whitesmoke; background-color: #4d4d4d; text-shadow: 2px 2px 4px black; box-shadow: 5px 5px 7px black;'>\r\n
            <tr>\r\n
                <td><h2>Afin de valider votre compte, merci de cliquer sur le lien suivant :</h2></td>\r\n
            </tr>\r\n
            <tr>\r\n
                <td><h2><a href=\"https://sebastien.rondeau-cameira.fr/?page=confirm&id=$user_id&token=$token\" style='color: whitesmoke;'>Valider mon compte</a></h2></td>\r\n
            </tr>\r\n
        </table>\r\n
    </body>\r\n
</html>\r\n";

            $headers  = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: ".$fromname." <".$frommail."> \r\n";
            $headers .= "Reply-To: ".$fromname." <".$frommail."> \r\n";
            // Message de Priorité haute
            // -------------------------
            $headers .= "X-Priority: 1  \r\n";
            $headers .= "X-MSMail-Priority: High \r\n";

            mail($to, "$subject", $htmlmess, $headers);

            // Message flash de confirmation
            $_SESSION['flash']['success'] = "Un email de confirmation vous a été envoyé.";

            header('Location: /?page=login');
            exit();
        }
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php if(!empty($errors)) : ?>
                <div class="error">
                    <p>Vous n'avez pas rempli le formulaire correctement</p>
                    <ul>
<?php foreach($errors as $error): ?>
                        <li><?php echo $error; ?></li>    
<?php endforeach; ?>
                    </ul>
                </div>
<?php endif; ?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label>Pseudo</label></th>
                            <td><input type="text" name="username" placeholder="Votre pseudo" value="<?php if(!empty($_POST['username'])) {
                                echo($_POST['username']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label>Email</label></th>
                            <td><input type="text" name="email" placeholder="Votre adresse email" value="<?php if(!empty($_POST['email'])) {
                                echo($_POST['email']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label>Mot de passe</label></th>
                            <td><input type="password" name="password" placeholder="Mot de passe" value="<?php if(!empty($_POST['password'])) {
                                echo($_POST['password']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label>Confirmez votre mot de passe</label></th>
                            <td><input type="password" name="password_confirm" placeholder="Confirmation mot de passe" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">M'inscrire</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
