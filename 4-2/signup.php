<?php
// session_start();
// db_connect.phpの読み込み
require_once('db_connect.php');
?>
<?php
$name = $_POST['name'];//formタグからPOSTで送られてきた値を$_POSTで受け取る
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);//ハッシュアルゴリズムのデフォルト値
// $passwordはハッシュ化したい文字列
// $errorMessage = "";
?>


 
<?php
// session_start();
            // POSTで送られたデータがあった場合
            if (isset($_POST["signUp"])) {   //もしPOSTで送られてきてあたいが入っていたら、以下の処理を実行する
                if (!empty($_POST['name']) && !empty($_POST['password'])){//もしnameとpasswordが空でなければ
                    

                    echo "登録が完了しました。";
                    // echo htmlspecialchars($messege, ENT_QUOTES);
                } 
                    // 処理
                    //PDOインスタンスを生成
                    $pdo = db_connect();
                    try {
                        
                        //SQL文を準備
                        $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
                        // プリペアドステートメントの作成 
                        $stmt = $pdo->prepare($sql);
                        //値をセット
                        $stmt->bindParam(':name', $name, PDO::PARAM_STR);//PDO::PARAM_STRは文字列ですという意味
                        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                        // :passwordにバインドする場合は、$password_hashを使用する
                        $stmt->bindValue(':password', $password_hash);//値をパラメータにバインドする
                        //実行
                        $stmt->execute();
                        
                    }
                    catch(PDOException $e) {
                        echo "データベースエラー";
                        echo $e->getMessage();
                        die();
                    }
            }
                
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>ユーザー登録画面</h1>
    
    <form method="POST" action="">
        
        <input type="text" name="name" id="name" placeholder="ユーザー名">
        <br>
        <input type="password" name="password" id="password" placeholder="パスワード">
        <br>
        <input class="button" type="submit" value="新規登録" id="signUp" name="signUp">
    </form>
</body>
</html>