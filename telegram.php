<?php

/* https://api.telegram.org/bot6041162300:AAHxINdrZ74CXpL6o1sd9FiDup-HgG3zukg/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6041162300:AAHxINdrZ74CXpL6o1sd9FiDup-HgG3zukg";
$chat_id = "-902644634";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{6041162300:AAHxINdrZ74CXpL6o1sd9FiDup-HgG3zukg}/sendMessage?chat_id={-902644634}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>