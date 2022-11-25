<?php


/**
 * PAGE RAPPORTS
 */

/* On récupère la liste des admins */
$admins = new Admins();
$adminsList = $admins->findAll();

/* On récupère la liste des référents */
$referents = new Referents();
$referentsList = $referents->findAll();

/* On récupère la liste des utilisateurs */
$users = new Users();
$usersList = $users->findAll();

$returnMsg.= "📈 <b><i>RAPPORT GÉNÉRAL</i></b>\n\n";
$returnMsg.= "Nombre total d'administrateurs: <b>" . count($adminsList) . "</b>\n";
$returnMsg.= "Nombre total de référents: <b>" . count($referentsList) . "</b>\n";
$returnMsg.= "Nombre total d'utilisateurs: <b>" . count($usersList) . "</b>";

sendInlineKeyboard($queryUserId, $returnMsg, $keyboardRapports);
