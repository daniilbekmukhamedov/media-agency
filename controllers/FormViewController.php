<?php

if (!defined('CHECK')) {
	header('Location: /');
}

$name = $_POST['name'];
$contacts = $_POST['contacts'];
$service = $_POST['serviceSelector'];
$industry = $_POST['industry'];
$message = $_POST['message'];

$token = "6307647525:AAH5QKrqJs45nF_m77MH_TH7y0y4Ykz06nE";
$chat_id = "-947696321";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $contacts,
  'Интересующая услуга: ' => $service,
  'Сфера: ' => $industry,
  'Сообщение: ' => $message
);

if ($name != "" && $contacts != "") {
  foreach($arr as $key => $value) {
    $txt .= "<b>".$key."</b> ".$value."%0A";
  };

  $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
} else {
  header('Location: /');
}

if ($sendToTelegram) {
  header('Location: /thanks');
} else {
  echo "Error";
}

?>