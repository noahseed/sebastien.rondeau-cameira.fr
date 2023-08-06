<?php

/**
 * START MENU & COMMANDES SLASH
 */
if (!empty($message) && strpos($message, "/") === 0) {

	/**
	 * MENU START
	 */
	if (strpos($message, "/start") === 0) {

		$returnMsg = "<b>" . strtoupper(APP_NAME) . "</b>\n\n";

		if(date('G') >= 0 && date('G') < 18) {
			$returnMsg.= 'Bonjour ';
        } else {
			$returnMsg.= 'Bonsoir ';
        }

		$returnMsg.= '<b>';

		if (isset($userName)) {
			$returnMsg .= '<a href="https://t.me/' . $userName . '/">';
		} else {
			$returnMsg .= '<a href="tg://user?id=' . $fromId . '/">';
		}

		$returnMsg .= $firstName;

		if (isset($lastName)) {
			$returnMsg .= " " . $lastName;
		}

		$returnMsg .= "</a></b> !\n\n";

		$returnMsg .= 'Je suis <b><i><a href="https://t.me/' . BOT_USERNAME . '/">' . BOT_NAME . "</a></i></b>, ";
		$returnMsg .= "je suis un roBot assistant pour Telegram.\n\n";
		$returnMsg .= "Que puis-je faire pour vous aider ? 😊";
		
		sendInlineKeyboard($chatId, $returnMsg, $keyboardDefault, $disable_web_page_preview = TRUE);

	}

}
