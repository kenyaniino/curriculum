<?php
$sugoroku = 40;
$kaisuu = 0;  //ここを１にすると1回目なのに2回目からスタートしてしまう
while($sugoroku > 0){  //$sugorokuが０になるまで以下の処理を繰り返す
    
    $kaisuu++;  //$kaisuuに１を足していく
    // echo "引く前".$sugoroku;
    $saikoro = mt_rand(1,6);  //1~6の乱数
    // echo "引く数".$saikoro;
    $sugoroku -= $saikoro;  //$sugoroku - $saikoroの結果を$sugorokuに代入しているこれがないと永遠に40 - $kaisuuになる
    // echo "結果".$sugoroku."<br>";
    echo $kaisuu ."回目 = " . $saikoro."<br>";
     
}

echo "合計". $kaisuu. "回でゴールしました";
