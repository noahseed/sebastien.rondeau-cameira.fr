<?php require('includes/functions.php'); ?>
<?php
    if(!empty($_POST) && !empty($_POST['email'])) {
        // Si une adresse email est entrée, on regarde dans la base si elle s'y trouve
        $req = $pdo->prepare("SELECT * FROM users WHERE email = ? AND confirmed_at IS NOT NULL");
        $req->execute([$_POST['email']]);
        $user = $req->fetch();

        if($user) {
            $reset_token = str_random(60);
            $req = $pdo->prepare("UPDATE users SET reset_token = ?, reset_at = NOW() WHERE id = ?");
            $req->execute([$reset_token, $user->id]);

            $_SESSION['flash']['success'] = "The instructions for resetting your password have been sent to you by email.";

            // On envoie le mail de réinitialisation du mot de passe 
            $subject  = "Reset password";
            $to       = $_POST['email'];
            $frommail = "sebastien@rondeau-cameira.fr";
            $fromname = "Sébastien RONDEAU-CAMEIRA";

            $htmlmess = "<html>\r\n
    <head>\r\n
        <title>".$subject."</title>\r\n
    </head>\r\n
        <h3>To reset your password, please click on the following link :</h3>\r\n
        <a href=\"https://sebastien.rondeau-cameira.fr/?page=reset&id={$user->id}&token=$reset_token\">Reset my password</a>\r\n
    </body>\r\n
</html>\r\n";

            $headers  = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: ".$fromname." <".$frommail."> \r\n";
            $headers .= "Reply-To: ".$fromname." <".$frommail."> \r\n";
            // Message de Priorité haute
            $headers .= "X-Priority: 1  \r\n";
            $headers .= "X-MSMail-Priority: High \r\n";

            // Puis on envoie le mail de confirmation
            if(mail($to, "$subject", $htmlmess, $headers)) {

                $_SESSION['flash']['success'] = "A confirmation email has been sent to you.";

            	header('Location: /?page=login');
            	exit();
            } else {
	         	$_SESSION['flash']['error'] = "The email could not be sent.";
            }
        } else {
            $_SESSION['flash']['error'] = "No account matches this email address.";
        }
    }
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
<?php // Affichage des messages flash
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
                            <th><label>Email</label></th>
                            <td><input type="email" name="email" required /></td>
                        </tr>
                        <tr>
                            <th></th>
                            <td><button type="submit">Send</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
