<?php


/**
 * Plugin TelegramLogin
 */

function getTelegramUserData() {

    if (isset($_COOKIE['tg_user'])) {

        $auth_data_json = urldecode($_COOKIE['tg_user']);
        $auth_data = json_decode($auth_data_json, TRUE);

        return $auth_data;

    }

    return FALSE;

}

if (isset($_GET['logout'])) {

    setcookie('tg_user', '');
    exit(header('Location: /'));

}

$tg_user = getTelegramUserData();

if ($tg_user !== FALSE) {
    
    $userId = htmlspecialchars($tg_user['id']);
    $first_name = htmlspecialchars($tg_user['first_name']);
    $last_name = htmlspecialchars($tg_user['last_name']);
    

    if (isset($tg_user['username'])) {

        $username = htmlspecialchars($tg_user['username']);

        if(date('G') >= 0 && date('G') < 18) {

            $salut = 'Bonjour';

        } else {

            $salut = 'Bonsoir';

        }

        //$htmlTelegramLogin = "<h4>{$salut}, <a href=\"https://t.me/{$username}\">{$first_name} {$last_name}</a>!</h4>";

    } else {

        //$htmlTelegramLogin = "<h4>{$salut}, {$first_name} {$last_name}!</h4>";

    }

    if (isset($tg_user['photo_url'])) {

        $photo_url = htmlspecialchars($tg_user['photo_url']);

        $avatar = "<a href=\"?logout\"><img src=\"{$photo_url}\" id=\"logged\" class=\"img-circle avatar\" alt=\"{$first_name}\"></a>\n";

    }

} else {

    $bot_username = BOT_USERNAME;
    $htmlTelegramLogin = <<<HTML
    <div id="login">
                    <script async src="https://telegram.org/js/telegram-widget.js?21" data-telegram-login="{$bot_username}" data-size="large"
                    data-userpic="false" data-auth-url="Check_Authorization" data-request-access="write"></script>
                </div>\n
    HTML;

}
