<?php


/**
 * PAGE BETA-TESTS
 */

$returnMsg.= "<b><i>BETA-TESTS</i></b>\n\n";
$returnMsg.= "Ci-dessous, les fonctionnalités en cours de développement et/ou révision.";

//sendInlineKeyboard($queryUserId, $returnMsg, $keyboardDonation);
editKeyboardMessageText($queryUserId, $queryMsgId, $returnMsg, $keyboardDonation);
