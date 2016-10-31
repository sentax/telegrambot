<?
include('TLG.php');

$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');

$tg->sendMessage('hiiii');


$update = json_decode(file_get_contents('php://input'));

echo($update);


?>