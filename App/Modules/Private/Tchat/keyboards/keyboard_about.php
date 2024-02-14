<?php


/**
 * MENU PRINCIPAL
 */
$keyboardPresentation[] = array(
    array(
        "text" => "👈 RETOUR...",
        "callback_data" => "default"
    ), array(
        "text" => "🫂 Liste des groupes",
        "callback_data" => "groups"
    )
);
if (in_array($fromId, ADMINS) || in_array($queryUserId, ADMINS)) {
    $keyboardPresentation[] = array(
        array(
            "text" => "🔐 ADMINISTRATION",
            "callback_data" => "admins"
        )
    );
}
