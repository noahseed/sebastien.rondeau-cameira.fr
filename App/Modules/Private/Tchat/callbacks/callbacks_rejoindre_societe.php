<?php


/**
 * PAGE NOUS REJOINDRE (Société)
 */

$emailSubject = 'PROPOSITION DE BENEVOLAT (Societe)';

$passage_ligne = "\r\n";
$lpdc = strtoupper(LPDC);

$emailText = '<h2>' . $lpdc . '</h2>' . $passage_ligne;
$emailText.= '<h3>' . $emailSubject . '</h3>' . $passage_ligne;
$emailText.= '<hr>' . $passage_ligne;

if (!empty($queryFirstName)){
    $emailText .= "Prénom: <b>{$queryFirstName}</b><br>" . $passage_ligne;
}
if(!empty($queryLastName)){
    $emailText .= "Nom: <b>{$queryLastName}</b><br>" . $passage_ligne;
}
if(!empty($queryUserName)){
    $emailText .= "Telegram: <a href='https://t.me/{$queryUserName}/'><b>@{$queryUserName}</b></a><br>" . $passage_ligne;
} else {
    $emailText .= "Telegram: <a href='tg://user?id={$queryUserId}/'><b>{$queryFirstName}</b></a><br>" . $passage_ligne;
}
if(!empty($message)){
    $emailText .= "Message: {$message}";
} else {
    $emailText .= "Message: Hellow !";
}

try {
    sendMail($email, $queryFirstName, $queryLastName, $emailSubject, $emailText);
} catch (Exception $e) {
    sendMessage(BOT_DEBUG, "ERREUR! Le Mail non envoyé:\n\n" . $emailText . ".\n\n" . $e->getMessage());
}

try {
    $msgUser = "Votre message a bien été envoyé à nos équipes.\n\nMerci pour votre candidature.\n\n";
    $msgUser.= "Nous vous contacterons dès que possible.";

    sendMessage($queryUserId, $msgUser);
} catch (Exception $e) {
    sendMessage(BOT_DEBUG, "ERREUR! Le message suivant n'a pas pu être envoyé:\n\n" . $msgUser . ".\n\n" . $e->getMessage());
} finally {
    sendMessage($queryUserId, '❤️');
}

try {
    $msgTeam = "Un(e) internaute souhaite devenir bénévole pour\n<b><i>" . LPDC . "</i></b>. 😊\n\n";
    $msgTeam.= "J'ai transféré sa candidature par email sur la boîte " . $email . ", ";
    $msgTeam.= "voici une copie de son message :";

    sendMessage(LPDC_TEAM, $msgTeam);
} catch (Exception $e) {
    sendMessage(BOT_DEBUG, "ERREUR! Le message suivant n'a pas pu être envoyé:\n\n" . $msgTeam . ".\n\n" . $e->getMessage());
}

try {
    sendMessage(LPDC_TEAM, strip_tags($emailText));
    //sendMessage(LPDC_TEAM, $emailText);
} catch (Exception $e) {
    sendMessage(BOT_DEBUG, "ERREUR! Le message suivant n'a pas pu être envoyé:\n\n" . $emailText . ".\n\n" . $e->getMessage());
}
