<?
include('TLG.php');
$update = json_decode(file_get_contents('php://input'));
$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');


$kyb = array( 
   'keyboard' =>  
  array ( 
    0 =>  
    array ( 
      0 => 'Row 1->Column 1', 
      1 => 'Row 1->Column 2', 
    ), 
    1 =>  
    array ( 
      0 => 'Row 2->Column 1', 
      1 => 'Row 2->Column 2', 
    ), 
    2 =>  
    array ( 
      0 => 'Row 3->Column 1', 
      1 => 'Row 3->Column 2', 
    ), 
  ), 
  'resize_keyboard'=>true 
); 

$tg->sendMessage($update->message->chat->id,$update->message->text,"&reply_markup=".json_encode($kyb));







?>