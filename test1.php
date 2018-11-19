<?php
$json_str=file_get_contents('php://input');//接收request的body
$json_obj=json_decode($json_str);//轉成json格式

$myfile=fopen("log.txt","w+") or die("unable to open file!");//設定一個log.txt來印訊息
fwrite($myfile, "\xEF\xBB\xBF".$json_str);//在字串上面加上\xef\xbb\xbf 轉成utf8格式
?>
