<?php

/**
 * MODULE TCHAT PRIVE
 */
if (!empty($fromId)) {
	include 'Tchat/module_private_tchat_users.php';
} elseif (!empty($queryUserId)) {
	include 'Tchat/module_private_tchat_users_callbacks.php';
} else {
	sendMessage(BOT_DEBUG, $agg);
}
