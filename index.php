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


$kyb1 = array( 
   'keyboard' =>  
  array ( 
    0 =>  
    array ( 
      0 => 'طراحی سایت', 
      1 => 'بهینه سازی', 
    ), 
    1 =>  
    array ( 
      0 => 'فروشگاه آنلاین', 
      1 => 'بازاریابی شبکه های اجتماعی', 
    ), 
	2 =>  
    array ( 
      0 => 'تولید محتوا', 
    ), 
  ), 
  'resize_keyboard'=>true 
); 

if($msg=="نمونه کارها"){
$tg->sendPhoto("violamode.com","http://rayanbartar.com/uploads/portfolio/small/viola-port-2.jpg",$chatid);
$tg->sendPhoto("arkshoe.com","http://rayanbartar.com/uploads/portfolio/small/arkshoe-2.jpg",$chatid);
}else if($msg=="درباره ما"){
	$tg->sendMessage($chatid,"شرکت طراحی و بهینه سازی سایت (سئو) رایان برتر با سال‌ها تجربه در زمینه تجارت الکترونیک، افزایش ترافیک سایت، تبلیغات در گوگل، طراحی پرتال، طراحی وب سایت، پانل پیام کوتاه (پنل اس ام اس تحت وب) طراحی و پیاده سازی ایده های مشتریان در بستر اینترنت همچنان از پیشگامان این عرصه می‌باشد.","&reply_markup=".json_encode($kyb));
}else if($msg=="اطلاعات تماس"){
	$tg->sendMessage($chatid,"تبریز چهارراه شریعتی (شهناز) کوچه ارک بازار موبایل تبریز طبقه 2 واحد 203 ","&reply_markup=".json_encode($kyb));
}else if($msg=="خدمات"){
	$tg->sendMessage($chatid,"منوی خدمات","&reply_markup=".json_encode($kyb1));
}else if($msg=="طراحی سایت"){
	$tg->sendMessage($chatid,'<a href="http://rayanbartar.com/">طراحی سایت</a>',"&reply_markup=".json_encode($kyb1));
}
else
$tg->sendMessage($chatid,"این فقط یک ربات جهت تست میباشد و امکانات دیگری ارایه نمی شود.","&reply_markup=".json_encode($kyb));







?>