<?php


/**
 * PAGE CONFIGS
 */

$returnMsg.= "<i>CONFIGURATION</i>\n\n";
$returnMsg.= "Configurations du Bot.";

sendInlineKeyboard($queryUserId, $returnMsg, $keyboardConfigs);
