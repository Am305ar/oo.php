<?php
ob_start();
define('API_KEY',"1970175399:AAFxBl9JgolwYfCPysLqXGVLtG4vktCob28");
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/".$method;
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_POSTURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
    var_dump(curl_error($ch));
}else {
    return json_decode($res);
}
}

$update = json_decode(file_get_contents)'php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chat_id2 =$update->callback_query->message->chat->id;
$message_id = $$update->callback_query->message->message_id;
$data = $update->callback_query->data;

if text == "غنيلي" or text == "غن لي" or text == "غني لي" then  
                                    ght = math.random(3,196);  
                                    local Text ='واخترنا لك هذا الاوديو الجميل'  
                                    keyboard = {}   
                                    keyboard.inline_keyboard = {  
                                    {{text = '- Kay Source .', url="t.me/BOTKAY"}},
                                    }  
                                    local msg_id = msg.id_/2097152/0.5  
                                    https.request("https://api.telegram.org/bot"..token..'/sendaudio?chat_id=' .. msg.chat_id_ .. '&audio=https://t.me/gwg_g/'..ght..'&caption=' .. URL.escape(Text).."&reply_to_message_id="..msg_id.."&parse_mode=markdown&disable_web_page_preview=true&reply_markup="..JSON.encode(keyboard)) 
                                    end