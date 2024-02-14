<?php

/**
 * CALLBACK QUERIES
 */
$query = isset($update['callback_query']) ? $update['callback_query'] : NULL;
$queryId = isset($query['id']) ? $query['id'] : NULL;
$queryMsgId = isset($query['message']['message_id']) ? $query['message']['message_id'] : NULL;
$queryUserId = isset($query['from']['id']) ? $query['from']['id'] : NULL;
$queryFirstName = isset($query['from']['first_name']) ? $query['from']['first_name'] : NULL;
$queryLastName = isset($query['from']['last_name']) ? $query['from']['last_name'] : NULL;
$queryUserName = isset($query['from']['username']) ? $query['from']['username'] : NULL;
$queryData = isset($query['data']) ? $query['data'] : NULL;

/**
 * CREATION DES VARIABLES
 */
$chatId = isset($update['message']['chat']['id']) ? $update['message']['chat']['id'] : NULL;
$chatTitle = isset($update['message']['chat']['title']) ? $update['message']['chat']['title'] : NULL;

$message = isset($update['message']['text']) ? $update['message']['text'] : NULL;
$messageId = isset($update['message']['message_id']) ? $update['message']['message_id'] : NULL;

/**
 * UTILISATEUR
 */
$fromId = isset($update['message']['from']['id']) ? $update['message']['from']['id'] : NULL;
$firstName = isset($update['message']['from']['first_name']) ? $update['message']['from']['first_name'] : NULL;
$lastName = isset($update['message']['from']['last_name']) ? $update['message']['from']['last_name'] : NULL;
$userName = isset($update['message']['from']['username']) ? $update['message']['from']['username'] : NULL;

/**
 * VARIABLES DE GROUPE
 */
$newGrpMember = isset($update['message']['new_chat_member']) ? $update['message']['new_chat_member'] : NULL;
//$newGrpMemberId = isset($newGrpMember['id']) ? $newGrpMember['id'] : NULL;
$newGrpMemberUsername = isset($newGrpMember['username']) ? $newGrpMember['username'] : NULL;

//$newChanMember = isset($update['my_chat_member']['new_chat_member']) ? $update['my_chat_member']['new_chat_member'] : NULL;
//$newChanMemberUsername = isset($newChanMember['username']) ? $newChanMember['username'] : NULL;

//$forwardFromId = isset($update['message']['forward_from']['id']) ? $update['message']['forward_from']['id'] : NULL;
//$forwardFromChatId = isset($update['message']['forward_from_chat']['id']) ? $update['message']['forward_from_chat']['id'] : NULL;
//$forwardMessageId = isset($update['message']['forward_from_message_id']) ? $update['message']['forward_from_message_id'] : NULL;

/**
 * DEBUG
 */
if (isset($update)) {
    $agg = json_encode($update, JSON_PRETTY_PRINT);
}
