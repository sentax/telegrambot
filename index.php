<?
include('TLG.php');

$tg=new Telegram('283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA');

$tg->sendMessage('hiiii');
/*
$token='283971445:AAGrn2U-_27P-6ABvVVAVXI_zsnMJ1PSadA';
$message='im okokokkok';
$user_id = '@imsentax';
        $url = 'https://api.telegram.org/bot'.$token.'/sendMessage?chat_id='.$user_id;
        $url .= '&text=' .$message."&parse_mode=HTML";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);


*/

echo("okk");


?>