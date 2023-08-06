<?php

function editMessageText($chat_id, $message_id, $newText) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'text' => urlencode($newText),
		'parse_mode' => 'HTML'
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/editMessageText?'.$q);
}

function editKeyboardMessageText($chat_id, $message_id, $newText, $keyboard, $disable_web_page_preview = FALSE) {

	$d2 = array(
		'inline_keyboard' => $keyboard,
		'resize_keyboard' => true
	);

	$d2 = json_encode($d2);

	$q = http_build_query([
		'chat_id' => $chat_id,
		'message_id' => $message_id,
		'text' => $newText,
		'reply_markup' => $d2,
		'parse_mode' => 'HTML',
		'disable_web_page_preview' => $disable_web_page_preview
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/editMessageText?'.$q);
}

function sendDocument($chat_id, $document) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'document' => $document
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendDocument?'.$q);
}

function sendInlineKeyboard($chat_id, $text, $keyboard, $disable_web_page_preview = FALSE) {

	$d2 = array(
		'inline_keyboard' => $keyboard,
		'resize_keyboard' => true
	);

	$d2 = json_encode($d2);

	/*
	if (strpos($text, "\n")) {
		$text = urlencode($text);
	}
	*/

	$q = http_build_query([
		'chat_id' => $chat_id,
		'text' => $text,
		'reply_markup' => $d2,
		'parse_mode' => 'HTML',
		'disable_web_page_preview' => $disable_web_page_preview
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'.$q);
}

function sendKeyboard($chat_id, $text, $key1) {

	$key2 = $key1;
	$key3 = json_encode($key2);

	/*
	if (strpos($text, "\n")) {
		$text = urlencode($text);
	}
	*/

	$q = http_build_query([
		'chat_id' => $chat_id,
		'text' => $text,
		'reply_markup' => $key3,
		'parse_mode' => 'HTML'
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'.$q);
}

function sendMail($email, $queryFirstName, $queryLastName, $subject, $text) {

	$boundary = md5(uniqid() . microtime());

	//Verifie si le fournisseur prend en charge les r
    if(preg_match("#@(hotmail|live|msn).[a-z]{2,4}$#", $email)) {
        $passage_ligne = "\n";
    } else {
        $passage_ligne = "\r\n";
    }

	$headers = "From: {$queryFirstName} {$queryLastName} <no-reply@lespaniersducoeur.org>" . $passage_ligne;
    $headers.= "Reply-to: {$queryFirstName} {$queryLastName} <{$email}>" . $passage_ligne;
    $headers.= "MIME-Version: 1.0" . $passage_ligne;
	$headers.= 'Content-Type: multipart/alternative; boundary="'.$boundary .'"' . $passage_ligne;

    $email_message = '--' . $boundary . $passage_ligne;
    $email_message .= 'Content-Type: text/plain; charset=utf-8' . $passage_ligne;
    $email_message .= "Content-Transfer-Encoding: base64" . $passage_ligne;
    $email_message .= $passage_ligne . chunk_split(base64_encode(strip_tags($text))) . $passage_ligne;

	$email_message .= '--' . $boundary . $passage_ligne;
    $email_message .= 'Content-Type: text/html; charset=utf-8' . $passage_ligne;
    $email_message .= "Content-Transfer-Encoding: base64" . $passage_ligne;
    $email_message .= $passage_ligne . chunk_split(base64_encode($text)) . $passage_ligne;

	$email_message .= '--' . $boundary . '--';

	mail("TEAM " . LPDC . " <{$email}>", LPDC_SITE . " - " . $subject, $email_message, $headers);

}

function sendMediaGroup($chat_id, $media) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'media' => json_encode($media)
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendMediaGroup?'.$q);
}

function sendMessage($chat_id, $text, $disable_web_page_preview = FALSE) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'text' => $text,
		'parse_mode' => 'HTML',
		'disable_web_page_preview' => $disable_web_page_preview
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'.$q);
}

function sendPhoto($chat_id, $photo) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'photo' => json_encode($photo)
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendPhoto?'.$q);
}

function sendReplyMessage($chat_id, $text, $reply_to_message_id) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'text' => $text,
		'reply_to_message_id' => $reply_to_message_id,
		'parse_mode' => 'HTML'
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendMessage?'.$q);
}

function sendVideo($chat_id, $video) {
	$q = http_build_query([
		'chat_id' => $chat_id,
		'video' => $video
	]);
	file_get_contents('https://api.telegram.org/bot'.BOT_TOKEN.'/sendVideo?'.$q);
}
