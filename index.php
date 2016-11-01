<?
/*
Telegram bot api sample usage
Developed By : S3NTAX - sentax.ir
Email : Romidian70@gmail.com
Feel free to use this script :)
*/
include('TLG.php');
$update = json_decode(file_get_contents('php://input'));//get json from recived message to BOT
$tg=new Telegram('YOUR_BOT_TOKEN');//paste your bot token
$chatid=$update->message->chat->id;//export userID 
$msg=$update->message->text;//export message content
//prepare telegram virtual keyboard
$kyb = array( 
   'keyboard' =>  
  array ( 
    0 =>  
    array ( 
      0 => 'kyb1', 
      1 => 'kyb2', 
    ), 
    1 =>  
    array ( 
      0 => 'kyb3', 
      1 => 'kyb4', 
    ), 
  ), 
  'resize_keyboard'=>true 
); 

//controll messages and response them
if($msg=="samples"){
	$tg->sendPhoto("violamode.com","http://rayanbartar.com/uploads/portfolio/small/viola-port-2.jpg",$chatid);
}else if($msg=="keyboard")
{
	$tg->sendMessage($chatid,$msg,"&reply_markup=".json_encode($kyb));
}
else
	$tg->sendMessage($chatid,$msg);


?>