<?php
// session_start();
// db_connect.phpの読み込み
require_once('db_connect.php');
?>
<?php
$name = $_POST['name'];
$password = $_POST['password'];
$password_hash = password_hash($password, PASSWORD_DEFAULT);
// $messege = "";
// $errorMessage = "";
?>


 
<?php
// session_start();
            // POSTで送られたデータがあった場合
            if (isset($_POST["signUp"])) {   //もしPOSTで送られてきたら、以下の処理を実行する
                if (!empty($_POST['name']) && !empty($_POST['password'])){

                    echo "登録が完了しました。";
                    // echo htmlspecialchars($messege, ENT_QUOTES);
                } 
                    // 処理
                    $pdo = db_connect();
                    try {
                        
                        // PDOインスタンスの作成
                        // $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
                        // エラー処理方法の設定
                        // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $sql = "INSERT INTO users (name, password) VALUES (:name, :password)";
                        // プリペアドステートメントの作成 
                        $stmt = $pdo->prepare($sql);
                        //値をセット
                        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
                        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
                        // :passwordにバインドする場合は、$password_hashを使用する
                        $stmt->bindValue(':password', $password_hash);
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
</head>
<body>
    <h1>新規登録</h1>
    
    <form method="POST" action="">
        user:<br>
        <input type="text" name="name" id="name">
        <br>
        password:<br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="submit" id="signUp" name="signUp">
    </form>
</body>
</html>