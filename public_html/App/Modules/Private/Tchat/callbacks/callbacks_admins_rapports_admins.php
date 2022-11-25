<?php


/**
 * PAGE RAPPORTS ADMINISTRATEURS
 */

/* On récupère la liste des admins */
$admins = new Admins();
$adminsList = $admins->findAll();

$returnMsg.= "📈 <b><i>RAPPORT ADMINISTRATEURS</i></b>\n\n";
$returnMsg.= "<u>Administrateurs:</u>\n";

foreach ($adminsList as $id => $admin) {
    $returnMsg .= "🔸 <a href=\"tg://user?id=" . $admin['user_id'] . "\">" . $admin['firstname'] . " " . $admin['lastname'] . "</a>\n";
}

sendInlineKeyboard($queryUserId, $returnMsg, $keyboardRapportsAdmins);
