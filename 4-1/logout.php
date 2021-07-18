<?php
// セッション開始
session_start();
// セッション変数のクリア ログインというのは、セッションに値があるかどうかで判定し,言い換えれば、セッションから値をなくせば、ログイン状態を解除できる
$_SESSION = array(); //全てのセッション変数を削除するためには下記のように空の配列を「$_SESSION」変数に格納
// セッションクリア
session_destroy();
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
</head>
    <body>
     <h1>ログアウト画面</h1>
    <div>ログアウトしました</div>
    <a href="login.php">ログイン画面に戻る</a>
    </body>
</html>