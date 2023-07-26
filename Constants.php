<?php

if (!defined('CHECK')) {
	header('Location: /');
}

class Views {
    // Main
    static $thanks          = "./views/main/Thanks.php";
    static $header          = "./views/main/Header.php";
    static $form            = "./views/main/Form.php";
    static $footer          = "./views/main/Footer.php";
    static $staticFooter    = "./views/main/StaticFooter.php";

    // Content
    static $contact = "./views/content/Contact.php";
    static $main    = "./views/content/Main.php";
    static $chatBot = "./views/content/ChatBot.php";
    static $webDev  = "./views/content/WebDev.php";
}

$URLs = [
    "/"         => ["url" => Views::$main       , "title" => "Компания цифрового маркетинга Swift Marketing"],
    "/thanks"   => ["url" => Views::$thanks     , "title" => "Спасибо"],
    "/contact"  => ["url" => Views::$contact    , "title" => "Свяаться с Swift Marketing"],
    "/web-dev"  => ["url" => Views::$webDev     , "title" => "Веб услуги Swift Marketing"],
    "/chat-bot" => ["url" => Views::$chatBot    , "title" => "Разработка Чат-ботов Swift Marketing"]
];

$param = "?v=124";
$fbPixel = "808721807646220";
$fbRedirect = "/web-dev";

?>