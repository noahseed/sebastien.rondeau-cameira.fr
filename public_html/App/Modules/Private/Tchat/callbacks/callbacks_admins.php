<?php


/**
 * PAGE ADMINISTRATION
 */
$returnMsg.= "🔐 <b><i>ADMINISTRATION</i></b>\n\n";

/*
$pages = new Pages();
$listePages = $pages->findAll();

foreach ($listePages as $key => $value) {
    $returnMsg.= $value['description'] . "\n";
}
*/

//sendInlineKeyboard($queryUserId, $returnMsg, $keyboardAdmins);
editKeyboardMessageText($queryUserId, $queryMsgId, $returnMsg, $keyboardAdmins);
