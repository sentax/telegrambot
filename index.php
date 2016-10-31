<?
include('TLG.php');
$update = json_decode(file_get_contents('php://input'));
$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');

$tg->sendMessage($update->message->chat->id,$update->message->chat->message);







?>