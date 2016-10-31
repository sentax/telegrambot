<?
/*
Developed By : S3NTAX - sentax.ir
Email : Romidian70@gmail.com
Feel free to use this script :)
*/
class Telegram { 
       var $token;
    
    function Telegram($inpToken)
    {
        $this->token=$inpToken;
    }

    function sendMessage($message="err")
    { 
        
        $user_id = '@imsentax';
        $url = 'https://api.telegram.org/bot'.$this->token.'/sendMessage?chat_id='.$user_id;
        $url .= '&text=' .$message."&parse_mode=HTML";
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec ($ch);
        curl_close ($ch);

    } 

    function sendPhoto($inpCaption,$inpUrl)
    { 
        $content = file_get_contents($inpUrl);
        file_put_contents("tmp6o8.jpg", $content);
        $bot_url    = "https://api.telegram.org/bot".$this->token."/";
        $url        = $bot_url . "sendPhoto?chat_id=@music6o8&parse_mode=HTML" ;
        $post_fields = array('caption'   => $inpCaption,'photo'     => new CURLFile(realpath("tmp6o8.jpg")));
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
        $output = curl_exec($ch);
        curl_close ($ch);
    } 

    function sendAudio($inpUrl)
    { 
       
        $content = file_get_contents($inpUrl);
        file_put_contents("tmp6o8.mp3", $content);
        $bot_url    = "https://api.telegram.org/bot".$this->token."/";
        $url        = $bot_url . "SendAudio?chat_id=@music6o8" ;
        $cfile = new CURLFile(realpath('Test.mp3'),'audio/mpeg3','tmp6o8.mp3');
        $post_fields = array('caption'   => $inpCaption,'audio'     => new CURLFile(realpath("tmp6o8.mp3")));
        $ch = curl_init(); 
        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type:multipart/form-data"));
        curl_setopt($ch, CURLOPT_URL, $url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields); 
        $output = curl_exec($ch);
        curl_close ($ch);
    } 





}

?>