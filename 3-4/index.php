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
                <?php
            // $users = array("id" => "1", "first_name" => "翔伍", "last_name" => "隼田", "last_login" => "2021-05-31 21:54:52");
            echo "ようこそ";
            // echo $users["id"];
            echo $users["last_name"];
            echo $users["first_name"];
            echo "さん";

            // foreach($users as $value){
            //     echo ($value);//表示させる

            //  }

            // var_dump($users);
            // echo $users[0];
            // echo $users[1];
            // echo $users[2];
            ?>
            </div>
            <div class="buttom">
                <?php
                    echo "最終ログイン日 : ".$users["last_login"];
        
                ?>
        
        
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
            if ($row['category_no'] == 1){

            }
        ?>
       <?php
        foreach ($posts as $row) {
        ?>
         <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['category_no']; ?></td>
            <td><?php echo $row['comment']; ?></td>
            <td><?php echo $row['created']; ?></td>
            <?php echo '<br>'; ?> 
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
