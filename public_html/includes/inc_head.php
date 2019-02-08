<!DOCTYPE html>
<html lang="<?php echo($lang); ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Site Web de Sébastien RONDEAU-CAMEIRA">
        <meta name="keywords" content="Sébastien, Sebastien, Rondeau, Cameira, Développement, Informatique,
        Web, Sites, Webmaster, technicien, radio, oise">
        <meta name="robots" content="index,follow">
        <meta name="googlebot" content="index,follow,nosnippet">
        <meta name="Content-language" content="french">
        <meta name="Rating" content="General">
        <meta name="revisit-after" content="1 month">
        <meta name="author" content="Sébastien RONDEAU-CAMEIRA">
        <title><?php echo $title; ?></title>
        <meta property="og:url" content="https://sebastien.rondeau-cameira.fr<?php echo $_SERVER['REQUEST_URI']; ?>">
        <meta property="og:type" content="<?php echo $og_type; ?>">
        <meta property="og:title" content="<?php echo $title; ?>">
        <meta property="og:description" content="<?php echo $title; ?>">
        <meta property="og:image" content="/images/aum_noir.png">
        <link rel="alternate" hreflang="x-default" href="https://sebastien.rondeau-cameira.fr/">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="/css/style.css">

        <link rel="icon" type="image/png" href="/favicon.png">

<?php //---- date en français  
    if(!empty($_GET['page']) && ($_GET['page'] == 'add' || $_GET['page'] == 'modify')) {
?>
        <script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<?php } ?>
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
<?php //---- reCaptcha
    if(!empty($_GET['page']) && $_GET['page'] == 'contact') {
?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
<?php } ?>
    </head>
