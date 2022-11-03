<?php

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

    $emailTo = "sebastien@rondeau-cameira.fr";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $array['firstname'] = htmlspecialchars($_POST['firstname']);
        $array['lastname'] = htmlspecialchars($_POST['lastname']);
        $array['email'] = htmlspecialchars($_POST['email']);
        $array['telephone'] = htmlspecialchars($_POST['telephone']);
        $array['message'] = htmlspecialchars($_POST['message']);
        $array['isSuccess'] = true;
        $emailText = "";

        if(empty($array['firstname'])){
            $array['firstnameError'] = "Je veux connaître ton prénom !";
            $array['isSuccess'] = false;
        } else {
            $emailText .= "Prénom: {$array['firstname']}<br>";
        }
        if(empty($array['lastname'])){
            $array['lastnameError'] = "Et oui je veux tout savoir, même ton nom !";
            $array['isSuccess'] = false;
        } else {
            $emailText .= "Nom: {$array['lastname']}<br>";
        }
        if(empty($array['email'])){
            $array['emailError'] = "A quelle adresse email puis-je vous répondre ?";
            $array['isSuccess'] = false;
        } else {
            if(!isEmail($array['email'])){
                $array['emailError'] = "Ceci n'est pas une adresse email valide !";
                $array['isSuccess'] = false;
            } else {
                $emailText .= "Email: {$array['email']}<br>";
            }
        }
        if(!isPhone($array['telephone'])){
            $array['telephoneError'] = "Que des chiffres et des espaces s'il te plaît...";
            $array['isSuccess'] = false;
        } else {
            $emailText .= "Téléphone: {$array['telephone']}<br>";
        }
        if(empty($array['message'])){
            $array['messageError'] = "Le champ message est requis.";
            $array['isSuccess'] = false;
        } else {
            $emailText .= "Message: {$array['message']}<br>";
        }

        if($array['isSuccess']){

            // Envoi de l'email
            $headers = "From: {$array['firstname']} {$array['lastname']} <{$array['email']}>\n";
            $headers .= "Content-type: text/html; charset=utf8\n";
            $headers .= "Reply-To: {$array['email']}";

            mail($emailTo, "Un message de votre site", $emailText, $headers);

        }

        echo json_encode($array);

    }

    function isPhone($var){
        return preg_match("/^[0-9 ]*$/", $var);
    }

    function isEmail($var){
        return filter_var($var, FILTER_VALIDATE_EMAIL);
    }
