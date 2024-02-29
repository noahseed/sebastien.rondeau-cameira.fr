<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$array = array(
    "firstname" => "",
    "lastname" => "",
    "email" => "",
    "telephone" => "",
    "message" => "",
    "firstnameError" => "",
    "lastnameError" => "",
    "emailError" => "",
    "telephoneError" => "",
    "messageError" => "",
    "isSuccess" => false
);

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $array['firstname'] = htmlspecialchars($_POST['firstname']);
    $array['lastname'] = htmlspecialchars($_POST['lastname']);
    $array['email'] = htmlspecialchars($_POST['email']);
    $array['telephone'] = htmlspecialchars($_POST['telephone']);
    $array['message'] = htmlspecialchars($_POST['message']);
    $array['isSuccess'] = true;
    $emailText = "";

    if(empty($array['firstname'])){
        $array['firstnameError'] = "Je veux connaître votre prénom !";
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Prénom: {$array['firstname']}\n";
    }
    if(empty($array['lastname'])){
        $array['lastnameError'] = "Et oui je veux tout savoir, même votre nom !";
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Nom: {$array['lastname']}\n";
    }
    if(empty($array['email'])){
        $array['emailError'] = "A quelle adresse email puis-je vous répondre ?";
        $array['isSuccess'] = false;
    } else {
        if(!isEmail($array['email'])){
            $array['emailError'] = "Ceci n'est pas une adresse email valide !";
            $array['isSuccess'] = false;
        } else {
            $emailText .= "Email: {$array['email']}\n";
        }
    }
    if(!isPhone($array['telephone'])){
        $array['telephoneError'] = "Que des chiffres et des espaces s'il te plaît...";
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Téléphone: {$array['telephone']}\n";
    }
    if(empty($array['message'])){
        $array['messageError'] = "Le champ message est requis.";
        $array['isSuccess'] = false;
    } else {
        $emailText .= "Message: {$array['message']}\n";
    }

    if($array['isSuccess']){

        // Envoi de l'email
        sendMail($emailText);

    }

    echo json_encode($array);
    
}

function isPhone($var){
    return preg_match("/^[0-9 ]*$/", $var);
}

function isEmail($var){
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}

function sendMail($emailText){
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    //To load the French version
    $mail->setLanguage('fr');
    $mail->CharSet = 'UTF-8';
    
    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'ssl0.ovh.net';                         //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'webmaster@maxxie.fr';                  //SMTP username
        $mail->Password   = 'DkEx7T-k*W_95_i';                      //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        //Recipients
        $mail->setFrom('webmaster@maxxie.fr', 'Sébastien RONDEAU-CAMEIRA');
        $mail->addAddress('noahseed@hotmail.com', 'Sébastien RONDEAU-CAMEIRA'); //Add a recipient
        $mail->addReplyTo('sebastien@rondeau-cameira.fr', 'Sébastien RONDEAU-CAMEIRA');
        
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Un message de votre site';
        $mail->Body    = nl2br(html_entity_decode($emailText));
        $mail->AltBody = strip_tags($emailText);
        
        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {
        $array['messageError'] = "Le message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}";
        //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}