<?php

/* https://api.telegram.org/bot6273205771:AAGqzSxeflgdIfzBwp99mx1eTK6bm0wROH4/getUpdates,
где, 6273205771:AAGqzSxeflgdIfzBwp99mx1eTK6bm0wROH4 - токен вашего бота, полученный ранее */

$name = $_POST['user_name'];
$phone = $_POST['user_phone'];
$email = $_POST['user_email'];
$token = "6273205771:AAGqzSxeflgdIfzBwp99mx1eTK6bm0wROH4";
$chat_id = "-1001853841211";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
  'Email' => $email
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot6273205771:AAGqzSxeflgdIfzBwp99mx1eTK6bm0wROH4/sendMessage?chat_id=-1001853841211&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: thank-you.html');
} else {
  echo "Error";
}
?>