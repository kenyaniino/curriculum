<?php
for($aaa = 1; $aaa <= 100; $aaa++){
    if(($aaa % 3 ===0)&&($aaa % 5 ===0)){
        echo "FizzBuzz!!";
    }elseif($aaa % 5 ===0){
        echo "Buzz!";
    }elseif($aaa % 3 ===0){
        echo "Fizz!";
    }else{
        echo $aaa;
    }
    
    echo "<br>";
}
?>

<!-- パフォーマンス　性能のこと

スロークエリ　MySQLで出力できるログの一つ

クエリログ　クライアントからの MySQL Server への接続・接続解除の情報、
およびクライアントから実行された全ての SQL クエリを出力してくれるログ -->
