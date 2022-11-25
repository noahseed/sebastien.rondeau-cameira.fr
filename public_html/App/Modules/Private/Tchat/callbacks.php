<?php


/**
 * CALLBACKS
 */
$email = 'sebastien@rondeau-cameira.fr';
$returnMsg = "<b>" . strtoupper(APP_NAME) . "</b>\n\n";

switch ($queryData) {
	case 'admins':
		require 'keyboards/keyboard_admins.php';
		require 'callbacks/callbacks_admins.php';
		break;

	case 'adminsReport':
		require 'keyboards/keyboard_admins_rapports_admins.php';
		require 'callbacks/callbacks_admins_rapports_admins.php';
		break;

	case 'beneficier':
		//require 'keyboards/keyboard_beneficier.php';
		require 'callbacks/callbacks_beneficier.php';
		break;

	case 'configs':
		require 'keyboards/keyboard_admins_configs.php';
		require 'callbacks/callbacks_admins_configs.php';
		break;

	case 'donation':
		require 'keyboards/keyboard_admins_donation.php';
		require 'callbacks/callbacks_admins_donation.php';
		break;

	case 'groups':
		require 'keyboards/keyboard_groups.php';
		require 'callbacks/callbacks_groups.php';
		break;

	case 'about':
		require 'keyboards/keyboard_about.php';
		require 'callbacks/callbacks_about.php';
		break;

	case 'rapports':
		require 'keyboards/keyboard_admins_rapports.php';
		require 'callbacks/callbacks_admins_rapports.php';
		break;

	case 'rejoindre':
		require 'keyboards/keyboard_rejoindre.php';
		require 'callbacks/callbacks_rejoindre.php';
		break;

	case 'rejoindreParticulier':
		//require 'keyboards/keyboard_rejoindre_particulier.php';
		require 'callbacks/callbacks_rejoindre_particulier.php';
		break;

	case 'rejoindreSociete':
		//require 'keyboards/keyboard_rejoindre_societe.php';
		require 'callbacks/callbacks_rejoindre_societe.php';
		break;

	case 'usersReport':
		require 'keyboards/keyboard_admins_rapports_users.php';
		require 'callbacks/callbacks_admins_rapports_users.php';
		break;

	default:
		require 'callbacks/callbacks_default.php';
		break;
}
