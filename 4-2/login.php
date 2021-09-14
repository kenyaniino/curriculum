<?php
// db_connect.phpの読み込み
require_once('db_connect.php');
// セッション開始
session_start();

// $_POSTが空ではない場合
// つまり、ログインボタンが押された場合のみ、下記の処理を実行する
if (!empty($_POST)) { //postされたデータが空でない場合


    // ログイン名が入力されていない場合の処理
    if (empty($_POST["name"])) {  //emptyは変数や値が空でないかチェックするメソッド
        echo "名前が未入力です。"; //postで送信された"name"が空だった場合のメッセージ
    }
    // パスワードが入力されていない場合の処理
    if (empty($_POST["pass"])) {
        echo "パスワードが未入力です。";
    }
// 両方共入力されている場合
if (!empty($_POST["name"]) && !empty($_POST["pass"])) {
    //ログイン名とパスワードのエスケープ処理
    $name = htmlspecialchars($_POST['name'], ENT_QUOTES); //htmlエンティティに変換
    $pass = htmlspecialchars($_POST['pass'], ENT_QUOTES); //htmlエンティティに変換、ENT_QUOTESは特殊文字のうちシングルクォーテーションとダブルクォーテーションも変換対象に含めるようになる
    // ログイン処理開始
    $pdo = db_connect();
    try {
        //データベースアクセスの処理文章。ログイン名があるか判定
        $sql = "SELECT * FROM users WHERE name = :name";
        //prepareで実行したいsql文をセット
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        die();
    }

    // 結果が1行取得できたら
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { //fetchでデータを取り出してFETCH_ASSOCで、カラムのみ取得
        // ハッシュ化されたパスワードを判定する定形関数のpassword_verifyパスワードがハッシュ値に適合するかどうかを調査する
        // 入力された値と引っ張ってきた値が同じか判定しています。
        if (password_verify($pass, $row['password'])) { //$passは、login.phpの画面で入力されたパスワード
            // セッションに値を保存
            $_SESSION["user_id"] = $row['id'];
            $_SESSION["user_name"] = $row['name'];
            // main.phpにリダイレクト
            header("Location: main.php");
            exit;
        } else {
            // パスワードが違ってた時の処理
            echo "パスワードに誤りがあります。";
        }
    } else {
        //ログイン名がなかった時の処理
        echo "ユーザー名かパスワードに誤りがあります。";
    }
}
}
?>

<!doctype html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="style.css" rel="stylesheet">
        <title>ログインページ</title>
    </head>
    <body>
        <h2>ログイン画面</h2>
        <a class="new_user" href="signup.php">新規ユーザー登録</a>
        <form method="POST" action="">
            <input type="text" name="name" size="15" style="width:200px;height:25px;" placeholder="ユーザー名"><br><br><!--sizeは何文字文の大きさかということ -->
            <input type="text" name="pass" size="15" style="width:200px;height:25px;" placeholder="パスワード"><br><br> <!--$passに入る -->
            <input class="button" type="submit" value="ログイン">
        </form>
    </body>
</html>