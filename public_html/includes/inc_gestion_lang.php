<?php


    // On récupère la langue choisie

    if(!empty($_POST['lang'])) {
        if($_POST['lang'] == 'en') {
            $_SESSION['lang'] = 'en';
            $lang = "en";
        } elseif($_POST['lang'] == 'pt') {
            $_SESSION['lang'] = 'pt';
            $lang = "pt";
        } else {
            $_SESSION['lang'] = "fr";
            $lang = "fr";
        }
    }

    if(isset($_SESSION['lang'])) {
        if($_SESSION['lang'] == 'en') {
            $_SESSION['lang'] = 'en';
            $lang = "en";
        } elseif($_SESSION['lang'] == 'pt') {
            $_SESSION['lang'] = 'pt';
            $lang = "pt";
        } else {
            $_SESSION['lang'] = "fr";
            $lang = "fr";
        }
    } else {
        $_SESSION['lang'] = "fr";
        $lang = "fr";
    }
