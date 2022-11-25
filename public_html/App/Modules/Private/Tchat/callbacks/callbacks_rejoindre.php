<?php


/**
 * PAGE NOUS REJOINDRE
 */

$returnMsg.= "Aujourd’hui nous sollicitons votre attention et nous avons besoin de votre aide plus que jamais !\n\n".
"Vous souhaitez devenir <b><i>bénévole</i></b>, <b><i>référent</i></b> de votre région et/ou de votre département ?\n\n".
"Vous êtes une <b><i>entreprise</i></b>, ou un <b><i>commerce</i></b> et vous souhaitez nous soutenir dans cette ".
"action nationale, tout comme <a href=\"https://emilicorne.com/\"><b>EMILICORNE</b></a>, ".
"ou vous souhaitez créer un partenariat avec nous ou apporter votre contribution d'une autre façon ?\n\n".
"Dîtes-nous si vous êtes un particulier ou une société; ou si vous préférez, vous pouvez utiliser plutôt le formulaire ".
"du site web.";

sendInlineKeyboard($queryUserId, $returnMsg, $keyboardRejoindre, $disable_web_page_preview = TRUE);
