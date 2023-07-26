<?php

define('CHECK', true);
require "./controllers/ViewController.php";

$section = ViewController::create();
$notThanks = true;

if ($section["url"] == Views::$thanks) {
    $notThanks = false;
} else {
    $notThanks = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $section["title"] ?></title>
    <link rel="stylesheet" href="index_files/css/style.css<?= $param ?>" />
    <script src="index_files/js/carousel.js<?= $param ?>" defer></script>
    <script src="index_files/js/form.js<?= $param ?>" defer></script>
    <!-- Meta Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', <?= $fbPixel ?>);
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=808721807646220&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
</head>
<body bgcolor="#181818">
    <?php 
    
    require_once Views::$header;
    require_once $section["url"];
    if ($notThanks) require_once Views::$form;
    require_once Views::$footer;
    if ($section["url"] != Views::$thanks && $section["url"] != Views::$contact) require_once Views::$staticFooter;

    ?>
    <script type="text/javascript" src="index_files/js/index.js<?= $param ?>"></script>
    <!-- <script type="text/javascript" src="index_files/js/bootstrap.bundle.min.js<?= $param ?>"></script> -->
</body>
</html>