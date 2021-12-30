<!--------------------

	* Plugin: TelegramX
	* Author: midwayfs0ciety
	* License: MIT License
	* Date: December 2021 - 2022
	* Website: https://github.com/midwayfs0ciety

    /* 
        Что бы получить Chatid - https://api.telegram.org/botXXXXXXXXXXXXXXXXXXXXXXX/getUpdates,
        где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее.
        Где -AAAAAAAAAAAAAAAAA - Это чат ид вашего группового чата. Объязательно с "-". 
    */

---------------------->

<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$token = "XXXXXXXXXXXXXXXXXXXXXXX";
$chat_id = "-AAAAAAAAAAAAAAAAA";
$arr = array (
  	'Имя: ' => $name,
  	'Телефон: ' => $phone,
  	'Email:' => $email,
  	'Сообщение:' => $message,
);

foreach($arr as $key => $value) {
  	$txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  	header('Location: index.html');
} else {
  	echo "Ошибка, попробуйте еще раз";
}

?>