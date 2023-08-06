<?php


/**
 * ON CHARGE LES DEPENCES
 */
require_once './App/Loader.php';

function checkTelegramAuthorization($auth_data) {

  $check_hash = $auth_data['hash'];
  unset($auth_data['hash']);
  $data_check_arr = [];

  foreach ($auth_data as $key => $value) {

    $data_check_arr[] = $key . '=' . $value;

  }
    sort($data_check_arr);
    $data_check_string = implode("\n", $data_check_arr);
    $secret_key = hash('sha256', BOT_TOKEN, true);
    $hash = hash_hmac('sha256', $data_check_string, $secret_key);

    if (strcmp($hash, $check_hash) !== 0) {

      sendMessage(BOT_DEBUG,'Data is NOT from Telegram');
      throw new Exception('Data is NOT from Telegram');

    }

    if ((time() - $auth_data['auth_date']) > 86400) {

      sendMessage(BOT_DEBUG,'Data is outdated');
      throw new Exception('Data is outdated');

    }

    return $auth_data;

}

function saveTelegramUserData($auth_data) {

  $auth_data_json = json_encode($auth_data);
  setcookie('tg_user', $auth_data_json);
  //sendMessage(BOT_DEBUG,'Cookie sauvegardé.');

}

try {

  $auth_data = checkTelegramAuthorization($_GET);
  saveTelegramUserData($auth_data);
  //sendMessage(BOT_DEBUG,'Données utilisateur reçues.');

} catch (Exception $e) {

  sendMessage(BOT_DEBUG,$e->getMessage());
  die ($e->getMessage());

}

exit(header('Location: /'));
