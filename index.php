<?
include('TLG.php');
$update = json_decode(file_get_contents('php://input'));
$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');


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

$tg->sendMessage($update->message->chat->id,$update->message->text,"&reply_markup=".json_encode($kyb));







?>