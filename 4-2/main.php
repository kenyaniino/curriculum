<?php
// function.phpの読み込み
require_once('function.php');
// db_connect.phpの読み込み
require_once('db_connect.php');
// ログインしていなければ、login.phpにリダイレクト、function.phpにある関数
check_user_logged_in();

// PDOのインスタンスを取得
$pdo = db_connect();
try {
    
    // SQL文の準備
    // $sql = "INSERT INTO posts (title, content) VALUES (:title, :content)";
    $sql = "SELECT * FROM books ORDER BY id desc";
            // プリペアドステートメントの作成
            $stmt = $pdo->prepare($sql);
            // $stmt->bindParam(':title', $title, PDO::PARAM_STR);
            // $stmt->bindParam(':content', $content, PDO::PARAM_STR);
            // 実行
            $stmt->execute();
    
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo "エラー";
        echo $e->getMessage();
        // 終了
        die();
    
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
    <title>メイン</title>
</head>
<body>
    <h1>在庫一覧画面</h1>
    <p>ようこそ<?php echo $_SESSION["user_name"]; ?>さん</p>
    <a class="new_book" href="create_book.php">新規登録</a>
    <a class="logout" href="logout.php">ログアウト</a>
    <table>
        <tr>
            <th>タイトル</th>
            <th>発売日</th>
            <th>在庫数</th>
            <th> </th>
            
        </tr>
        <?php while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { ?>
            <tr>
                
                <td><?php echo $row['title']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['stock']; ?></td>
                
                <td><a class="delet_button" href="delete.php?id=<?php echo $row['id']; ?>">削除</a></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>

