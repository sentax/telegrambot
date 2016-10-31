<?
include('TLG.php');
$update = json_decode(file_get_contents('php://input'));
$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');
$chatid=$update->message->chat->id;
$msg=$update->message->text;
$kyb = array( 
   'keyboard' =>  
  array ( 
    0 =>  
    array ( 
      0 => 'خدمات', 
      1 => 'نمونه کارها', 
    ), 
    1 =>  
    array ( 
      0 => 'اطلاعات تماس', 
      1 => 'درباره ما', 
    ), 
  ), 
  'resize_keyboard'=>true 
); 


if($msg=="نمونه کارها")
sendPhoto("violamode.com","img/viola.jpg",$chatid);
else
$tg->sendMessage($chatid,$msg,"&reply_markup=".json_encode($kyb));







?>