<?php
$name = $_POST['my-name'];

$question1 = ['80','22','20','21']; 
$question2 = ['PHP','Python','JAVA','HTML']; 
$question3 = ['join','select','insert','update']; 

$answer1 = $question1[0]; //回答の正解 
$answer2 = $question2[0]; //回答の正解 
$answer3 = $question3[0]; //回答の正解 
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <p>お疲れ様です<?php echo $name; ?>さん</p>
    <form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <?php
    foreach($question1 as $value){ ?>
        <input type="radio" name="question1" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php } ?>
    
    <h2>②Webページを作成するための言語は？</h2>
    <?php 
    foreach($question2 as $value){ ?>
        <input type="radio" name="question2" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php } ?>
    
    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <?php
    foreach($question3 as $value){ ?>
        <input type="radio" name="question3" value="<?php echo $value; ?>" /> <?php echo $value; ?>
    <?php } ?>
    
    <!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<input type="hidden" name="answer1" value="<?php echo $answer1 ?>">
<input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
<input type="hidden" name="answer3" value="<?php echo $answer3 ?>">
<input type="hidden" name="my-name" value="<?php echo $name?>">
<br>
<input type="submit" value="回答する">
</form>
</body>
</html>
