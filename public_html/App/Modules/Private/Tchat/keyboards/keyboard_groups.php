<?php


/**
 * KEYBOARD CHANSON
 */
$keyboardGroups[] = array(
    array(
        "text" => "👈 RETOUR...",
        "callback_data" => "default"
    ), array(
        "text" => "❓ Présentation",
        "callback_data" => "presentation"
    )
);
if (in_array($fromId, ADMINS) || in_array($queryUserId, ADMINS)) {
    $keyboardGroups[] = array(
        array(
            "text" => "🔐 ADMINISTRATION",
            "callback_data" => "admins"
        )
    );
}
