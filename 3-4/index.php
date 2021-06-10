<?php
//作成したpdo.phpを読み込む
// require_once('pdo.php');

require_once('getData.php');

$getData = new getData();
     
$users = $getData->getUserData();
$posts = $getData->getPostData();
// var_dump($users);
// var_dump($posts);//表示させる
// 関数db_connect()からPDOを取得する
// $pdo = db_connect();
?>


<!DOCTYPE html>
<html lang="jp">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="style.css" rel="stylesheet">
        <title>test</title>
    </head>
    <body>
        <header>
            <div class="left"><img src="imgs/logo.png" width="180px" height="100px"></div>
            <div class="top">

            <p><?php echo "ようこそ".$users["last_name"].$users["first_name"] . "さん";?></p>
            
            
            </div>
            <div class="buttom">
                
                    <p><?php echo "最終ログイン日 : ".$users["last_login"]; ?></p>
        
                
        
        
            </div>
            <div>

            
        </div>
    </header>
    <main>
        
        <table>
        <tr>
        <th>記事ID</th>
        <th>タイトル</th>
        <th>カテゴリ</th>
        <th>本文</th>
        <th>投稿日</th>
        </tr>

        <?php
        foreach ($posts as $row) {
            ?>
         <tr>
             <td><?php echo $row['id']; ?></td>
             <td><?php echo $row['title']; ?></td>
             <td><?php if ($row['category_no'] == 1){
                 echo "食事";
             }elseif($row['category_no'] == 2){
                    echo "旅行";
             }else{
                 echo "その他";
             }
             ?>
            </td>

            <td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['created']; ?></td>
        </tr>
        
        <?php  } ?>
        
       </table>
        
    </main>
    <footer>
        <div>Y&I group.inc
        </div>
    </footer>
</body>
</html>
