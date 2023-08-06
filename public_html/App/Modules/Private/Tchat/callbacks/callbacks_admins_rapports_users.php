<?php


/**
 * PAGE RAPPORTS UTILISATEURS
 */

/* On récupère la liste des utilisateurs */
$users = new Users();
$usersList = $users->findAll();

$returnMsg.= "📈 <b><i>RAPPORT UTILISATEURS</i></b>\n\n";
$returnMsg.= "<u>Utilisateurs:</u>\n";

foreach ($usersList as $id => $user) {
    $returnMsg .= "🔸 <a href=\"tg://user?id=" . $user['user_id'] . "\">" . $user['firstname'] . " " . $user['lastname'] . "</a>\n";
}

sendInlineKeyboard($queryUserId, $returnMsg, $keyboardRapportsUsers);
