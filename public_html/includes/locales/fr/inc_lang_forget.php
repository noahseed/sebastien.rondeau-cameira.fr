<?php
    if(!empty($_POST) && !empty($_POST['email'])) {

        $users = new Users();

        // Si une adresse email est entrée, on regarde dans la base si elle s'y trouve
        $user = $users->findUser($_POST['email']);

        if($user) {
            $reset_token = str_random(60);
            $users->resetToken($reset_token, $user['user_id']);

            // On envoie le mail de réinitialisation du mot de passe 
            $subject  = "Réinitialisation du mot de passe";
            $to       = $_POST['email'];
            $frommail = "sebastien@rondeau-cameira.fr";
            $fromname = "Sébastien RONDEAU-CAMEIRA";

            $htmlmess = "<html>\r\n
    <head>\r\n
        <title>".$subject."</title>\r\n
    </head>\r\n
        <h3>Afin de réinitialiser votre mot de passe, merci de cliquer sur le lien suivant :</h3>\r\n
        <a href=\"https://sebastien.rondeau-cameira.fr/?page=reset&id={$user['user_id']}&token=$reset_token\">Réinitialiser mon mot de passe</a>\r\n
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

                $_SESSION['flash']['success'] = "Les instructions pour la réinitialisation de votre mot de passe vous ont été envoyées par email.";

            	header('Location: /?page=login');
            	exit();
            } else {
	         	$_SESSION['flash']['error'] = "Le mail n'a pas pu être envoyé.";
            }
        } else {
            $_SESSION['flash']['error'] = "Aucun compte ne correspond à cette adresse email.";
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
                            <td><button type="submit">Envoyer</button></td>
                        </tr>
                    </table>
                </form>
                <hr />
<?php echo $text; ?>
            </div>
        </article>
