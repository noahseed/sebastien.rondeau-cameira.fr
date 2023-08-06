<?php


/**
 * MENU PRINCIPAL
 */
$keyboardDefault[] = array(
    array(
        "text" => "❓ Présentation",
        "callback_data" => "about"
    ), array(
        "text" => "🫂 Liste des groupes",
        "callback_data" => "groups"
    )
);
if (in_array($fromId, ADMINS) || in_array($queryUserId, ADMINS)) {
    $keyboardDefault[] = array(
        array(
            "text" => "🔐 ADMINISTRATION",
            "callback_data" => "admins"
        )
    );
}
