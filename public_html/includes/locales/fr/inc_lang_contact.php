<?php

    // reCaptcha
	$captcha = new Recaptcha('6LdqiHsUAAAAAG9EggYyEYTl-QvUpmv9bbhu1LUT', '6LdqiHsUAAAAAFbCohv322aAlTcaFFEAgUGLiyXS');
    $ipVisiteur = $captcha->get_ip();

    // On verifie si le formulaire a bien été rempli
    if(!empty($_POST['Envoyer']) && ($_POST['Envoyer'] == 'Envoyer')) {
        if(!empty($_POST['firstname']) && (!empty($_POST['lastname']))
        && (!empty($_POST['email'])) && (!empty($_POST['subject']))
        && (!empty($_POST['subject'])) && (!empty($_POST['message']))) {

        	// On vérifie le captcha
            if($captcha->checkCode($_POST['g-recaptcha-response'], $ipVisiteur) === false){

            	// Le captcha ne semble pas valide.
            	$_SESSION['flash']['error'] = "Erreur captcha !";

        	} else {

        		// Le captcha semble valide.
        		// On crée les variables
                $firstname  = $_POST['firstname'];
                $lastname   = $_POST['lastname'];
                $email      = $_POST['email'];
                $subject    = $_POST['subject'];
                $message    = nl2br($_POST['message']);
                $send       = true;

        	}

        } else {

            $_SESSION['flash']['error'] = "Vous devez remplir correctement tous les champs !";

        }
    }

    // Si tout est correct,
    if(!empty($send) && ($send == true)) {

    	// On inscrit le message dans la base
    	$msg = new Message();
    	$msg->message_firstname = $firstname;
    	$msg->message_lastname = $lastname;
    	$msg->message_email = $email;
    	$msg->message_subject = $subject;
    	$msg->message_content = $message;

    	$messages = new Messages();
    	$messages->add($msg);

        // Puis on envoie le formulaire par mail
        $to       = "noahseed@hotmail.com";
        $frommail = "sebastien@rondeau-cameira.fr";
        $fromname = "Sébastien RONDEAU CAMEIRA";

        $htmlmess = "<html>\r\n
    <head>\r\n
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>\r\n
        <title>".$subject."</title>\r\n
    </head>\r\n
    <body style='color: whitesmoke; background-color: black; padding: 20px;'>\r\n
        <table>\r\n
            <tr>\r\n
                <td><a href='https://sebastien.rondeau-cameira.fr'><img src='https://sebastien.rondeau-cameira.fr/images/aum_blanc.png'
                width='70' height='70' /></a></td>\r\n
                <td><h1>sebastien.rondeau-cameira.fr</h1></td>\r\n
            </tr>\r\n
        </table>\r\n
        <br />\r\n
        <table>\r\n
            <tr>\r\n
                <th>&nbsp;</th>\r\n
                <td><h2>Le message suivant a été envoyé du site Web :</h2></td>\r\n
            </tr>\r\n
            <tr>\r\n
                <th>Prénom</th>\r\n
                <td>".$firstname."</td>\r\n
            </tr>\r\n
            <tr>\r\n
                <th>Nom</th>\r\n
                <td>".$lastname."</td>\r\n
            </tr>\r\n
            <tr>\r\n
                <th>Courriel</th>\r\n
                <td>".$email."</td>\r\n
            </tr>\r\n
            <tr>\r\n
                <th>Sujet</th>\r\n
                <td>".$subject."</td>\r\n
            </tr>\r\n
            <tr>\r\n
                <th style=\"vertical-align: top;\">Message</th>\r\n
                <td>".$message."</td>\r\n
            </tr>\r\n
        </table>\r\n
    </body>\r\n
</html>";

            $headers  = "MIME-Version: 1.0 \r\n";
            $headers .= "Content-type: text/html; charset=utf-8 \r\n";
            $headers .= "From: ".$fromname." <".$frommail."> \r\n";
            $headers .= "Reply-To: ".$firstname." ".$lastname." <".$email."> \r\n";
            $headers .= "Disposition-Notification-To: ".$email." \r\n";
            // Message de Priorité haute
            // -------------------------
            //$headers .= "X-Priority: 1  \r\n";
            //$headers .= "X-MSMail-Priority: High \r\n";

        mail($to, $subject, $htmlmess, $headers);
?>
        <article>
            <div class="title"><?php echo $title; ?></div>
            <div class="article">
                <h2>Message envoyé !</h2>
                <h3>Le message suivant a été envoyé :</h3>
                <table>
                    <tr>
                        <th>Prénom :</th>
                        <td><?php echo $firstname; ?></td>
                    </tr>
                    <tr>
                        <th>Nom :</th>
                        <td><?php echo $lastname; ?></td>
                    </tr>
                    <tr>
                        <th>Courriel :</th>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <th>Sujet :</th>
                        <td><?php echo $subject; ?></td>
                    </tr>
                    <tr>
                        <th>Message :</th>
                        <td><?php echo $message; ?></td>
                    </tr>
                </table>
            </div>
        </article>
<?php
    } else {
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
<?php echo $text; ?>
            <h2>Formulaire de contact :</h2>
<?php
    if(!empty($msg)) {
        echo $msg;
    }
?>
                <form method="POST">
                    <table>
                        <tr>
                            <th><label for="firstname">Prénom :</label></th>
                            <td><input name="firstname" type="text" id="firstname" value="<?php if(!empty($_POST['firstname'])) {
                                    echo($_POST['firstname']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label for="lastname">Nom :</label></th>
                            <td><input name="lastname" type="text" id="lastname" value="<?php if(!empty($_POST['lastname'])) {
                                    echo($_POST['lastname']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label for="email">Courriel :</label></th>
                            <td><input name="email" type="email" id="email" value="<?php if(!empty($_POST['email'])) {
                                    echo($_POST['email']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label for="subject">Sujet :</label></th>
                            <td><input name="subject" type="text" id="subject" value="<?php if(!empty($_POST['subject'])) {
                                    echo($_POST['subject']);
                            } ?>" /></td>
                        </tr>
                        <tr>
                            <th><label for="message">Votre message :</label></th>
                            <td><textarea rows="20" cols="80" name="message" id="message"><?php
                                if(!empty($_POST['message'])) {
                                    echo($_POST['message']);
                                } ?></textarea></td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>
                            	<?php echo($captcha->html()); ?>
                            </td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td><input name="Envoyer" value="Envoyer" type="submit" /></td>
                        </tr>
                    </table>
                </form>
<?php } ?>
            </div>
        </article>
