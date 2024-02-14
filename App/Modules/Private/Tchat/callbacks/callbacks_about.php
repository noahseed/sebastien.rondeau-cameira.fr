<?php


/**
 * PAGE PRESENTATION
 */

$returnMsg.= "PRESENTATION";

//sendInlineKeyboard($queryUserId, $returnMsg, $keyboardPresentation);
editKeyboardMessageText($queryUserId, $queryMsgId, $returnMsg, $keyboardPresentation);
