<?php require ('includes/functions.php'); ?>
<?php // Traitement du formulaire
    if(!empty($_POST) && empty($_POST['lang'])) {
        $errors = array();

        if(empty($_POST['username'])) {
            $errors['username'] = "You must enter a username.";
        } else {
            if(!preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])) {
                $errors['username'] = "Your username is not valid.";
            } else {
                $req = $pdo->prepare("SELECT id FROM users WHERE username = ?");
                $req->execute([$_POST['username']]);
                $user = $req->fetch();

                if($user) {
                    $errors['username'] = "This username is already used.";
                }
            }
        }

        if(empty($_POST['email'])) {
            $errors['email'] = "You must enter an email address.";
        } else {
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = "Your email address is not valid";
            } else {
                $req = $pdo->prepare("SELECT id FROM users WHERE email = ?");
                $req->execute([$_POST['email']]);
                $email = $req->fetch();

                if($email) {
                    $errors['email'] = "This email address is already used.";
                }
            }
        }

        if(empty($_POST['password'])) {
            $errors['password'] = "You must enter a password.";
        }

        if($_POST['password'] != $_POST['password_confirm']) {
            $errors['password'] = "Passwords do not match.";
        }

        // Si le formulaire est correct
        if(empty($errors)) {
            $req = $pdo->prepare("INSERT INTO users SET username = ?, email = ?, password = ?, confirmation_token = ?");

            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $token    = str_random(60);

            $req->execute([$_POST['username'], $_POST['email'], $password, $token]);

            $user_id = $pdo->lastInsertId();

            // Puis on envoie le mail de confirmation
            $subject  = "Thank you to confirm your registration";
            $to       = $_POST['email'];
            $frommail = "sebastien@rondeau-cameira.fr";
            $fromname = "Sébastien RONDEAU-CAMEIRA";

            $htmlmess = "<html>\r\n
    <head>\r\n
        <title>".$subject."</title>\r\n
    </head>\r\n
        <h3>To validate your account, please click on the following link :</h3>\r\n
        <a href=\"https://sebastien.rondeau-cameira.fr/?page=confirm&id=$user_id&token=$token\">Confirm my account</a>\r\n
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
            $_SESSION['flash']['success'] = "A confirmation email has been sent to you.";

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
                    <p>You have not completed the form correctly</p>
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
                            <th><label>Username</label></th>
                            <td><input type="text" name="username" placeholder="Your username" value="<?php if(!empty($_POST['username'])) {
                                echo($_POST['username']);
                            } ?>" /></td> <!-- required -->
                        </tr>
                        <tr>
                            <th><label>Email</label></th>
                            <td><input type="text" name="email" placeholder="Your email address" value="<?php if(!empty($_POST['email'])) {
                                echo($_POST['email']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label>Password</label></th>
                            <td><input type="password" name="password" placeholder="Password" value="<?php if(!empty($_POST['password'])) {
                                echo($_POST['password']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label>Confirm your password</label></th>
                            <td><input type="password" name="password_confirm" placeholder="Password confirmation" /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Register</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
