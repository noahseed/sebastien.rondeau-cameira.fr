<?php
	// Classe reCaptcha
    require('recaptcha.php');

    // Langues
    if($lang == 'fr') {
        require('includes/locales/fr/inc_lang_contact.php');
    } elseif($lang == 'en') {
        require('includes/locales/en/inc_lang_contact.php');
    } elseif($lang == 'pt') {
        require('includes/locales/pt/inc_lang_contact.php');
    }
?>
