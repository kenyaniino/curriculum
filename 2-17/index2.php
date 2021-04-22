<?php
date_default_timezone_set('Asia/Tokyo');
$time = date("H");
if($time >= 0 && $time <= 9) {
    echo "今" . $time . "時台です"."<br>";
    echo "おはようございます";}
elseif($time >= 10 && $time <= 16) {
    echo "今" . $time . "時台です"."<br>";
    echo "こんにちは";
}else{
    echo "今" . $time . "時台です"."<br>";
    echo "こんばんわ";
}
?>


