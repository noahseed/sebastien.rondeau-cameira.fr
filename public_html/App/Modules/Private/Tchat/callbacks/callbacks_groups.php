<?php


/**
 * PAGE GROUPES DE DISCUSSION
 */

$returnMsg.= "🫂 <b><i>Liste des groupes</i></b>\n\n";

$groups = new Groups();
$groupList = $groups->findAll();

foreach ($groupList as $key => $value) {
    if ($value['group_type'] < 10) {
        $returnMsg.= '<a href="' . $value['group_url'] . '">' . $value['chat_name'] . "</a>\n";
    }
}

$returnMsg.= "\n";
$returnMsg.= "❤️🧡💛💚💙💜🤍";

//sendInlineKeyboard($queryUserId, $returnMsg, $keyboardGroups);
editKeyboardMessageText($queryUserId, $queryMsgId, $returnMsg, $keyboardGroups, TRUE);
