<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    
    // 書き込み可能なときの処理
    // とりあえず、確認のため、echoで表示だけさせる
    echo "writable!!";
    echo "<br>";

} else {
    // 書き込み不可のときの処理
    echo "not writable!";
    exit;
}

?>

<?php
$testFile = "test.txt";
$contents = "こんにちは！";

if (is_writable($testFile)) {
    $fp = fopen($testFile,"a");
    fwrite($fp, $contents);
    fclose($fp);
    echo "finish writing!!";
    echo "<br>";
}else {
    echo "not writable!";
    exit;
}
?>

<?php
$test_file = "test2.txt";

if (is_readable($test_file)) {
    $fp = fopen($test_file, "r");
    while ($line = fgets($fp)){
        echo $line.'<br>';
    }
    fclose($fp);
}else {
    echo "not readable!";
    exit;
}
?>

<!-- 1. CakePHPの2系・3系の違い
配列地獄から解消された
ModelクラスがtableとEnterの二つに分離された

2. LAMP
オープンソースソフトウェアの組み合わせを指す言葉（略称）
具体的にはOSのLinux、WebサーバーのApache、データベースのMySQL、
プログラミングのPerl、PHP、Pythonを指します。
LAMPとはこれらの頭文字を取ったもの

3. AWS
Amazon Web Servicesの略で、Amazonが提供している100以上のクラウドコンピューティングサービスの総称
クラウドコンピューティングを使ったサービスのこと
クラウドコンピューティング ＝ インターネットを介してサーバー・ストレージ・データベース・ソフトウェアといった
コンピューターを使った様々なサービスを利用することを指す。
クラウドコンピューティングでは、手元に1台のPCとインターネットに接続できる環境さえあれば、サーバーや大容量のストレージ、
高速なデータベースなどを必要な分だけ利用できる。 -->