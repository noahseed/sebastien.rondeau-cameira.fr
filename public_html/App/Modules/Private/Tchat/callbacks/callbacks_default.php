<?php


/**
 * PAGE DEFAULT
 */

$returnMsg = "<b>" . strtoupper(APP_NAME) . "</b>\n\n";

if(date('G') >= 0 && date('G') < 18) {
	$returnMsg.= 'Bonjour ';
} else {
	$returnMsg.= 'Bonsoir ';
}

if (isset($queryUserName)) {
	$returnMsg .= '<b><a href="https://t.me/' . $queryUserName . '/">';
} else {
	$returnMsg .= '<b><a href="tg://user?id=' . $queryUserId . '/">';
}

$returnMsg .= $queryFirstName;

if (isset($queryLastName)) {
	$returnMsg .= " " . $queryLastName;
}

$returnMsg .= "</a></b> !\n\n";

$returnMsg .= 'Je suis <b><i><a href="https://t.me/' . BOT_USERNAME . '/">' . BOT_NAME . "</a></i></b>, ";
$returnMsg .= "je suis un roBot assistant pour Telegram.\n\n";
$returnMsg .= "Que puis-je faire pour vous aider ? 😊";

if (!empty($fromId)) {
	sendInlineKeyboard($fromId, $returnMsg, $keyboardDefault, $disable_web_page_preview = TRUE);
} elseif (!empty($queryUserId)) {
	editKeyboardMessageText($queryUserId, $queryMsgId, $returnMsg, $keyboardDefault, $disable_web_page_preview = TRUE);
} else {
	sendMessage(BOT_DEBUG, $agg);
}
