<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" itemscope itemtype="http://schema.org/Article" lang="<?php echo($lang); ?>">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $title; ?></title>

        <!-- Metas -->
        <meta name="description" content="Site Web de Sébastien RONDEAU-CAMEIRA" />
        <meta name="keywords" content="Sébastien, Sebastien, Rondeau, Cameira, Développement, Informatique,
        Web, Sites, Webmaster, technicien, radio, oise" />
        <meta name="Language" CONTENT="<?php echo($lang); ?>" />
        <meta name="robots" content="noindex,follow" />
        <meta name="googlebot" content="noindex,follow,nosnippet" />
        <meta name="Rating" content="General" />
        <meta name="revisit-after" content="15 days" />
        <link rel="alternate" hreflang="x-default" href="https://sebastien.rondeau-cameira.fr/" />

        <!-- Open Graph meta --> 
        <meta property="og:url" content="https://sebastien.rondeau-cameira.fr<?php echo $_SERVER['REQUEST_URI']; ?>" />
        <meta property="og:type" content="<?php echo $og_type; ?>" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $title; ?>" />
        <meta property="og:image" content="/images/aum_noir.png" />

        <!-- Templates -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine" />
        <link rel="stylesheet" type="text/css" href="/css/style.css" media="screen" />

        <!-- Icon -->
        <link rel="shortcut icon" href="/favicon.ico" />
        <link rel="icon" type="image/png" href="/favicon.png" />

<?php //---- date en français  
    if($_GET['page'] == 'add' || $_GET['page'] == 'modify') {
?>
        <!-- CKeditor -->
        <script src="/js/ckeditor/ckeditor.js"></script>

<?php } ?>
<?php
    if($page_id == '1' || $page_id == '13') {
?>
        <!-- Script date et heure -->
<?php //---- date en français  
    if($lang == 'fr') {
?>
        <script src="/js/locales/fr/date_heure.js"></script>
<?php //---- date en anglais
    } elseif($lang == 'en') {
?>
        <script src="/js/locales/en/date_heure.js"></script>
<?php //---- date en portugais
    } elseif($lang == 'pt') {
?>
        <script src="/js/locales/pt/date_heure.js"></script>
<?php } ?>
<?php } ?>
    </head>
    <body>
