<?php
$name = $_POST['my-name'];
$question1 = $_POST['question1'];//ラジオボタンの内容を受け取る
$answer1 = $_POST['answer1']; //hiddenで送られた正解を受け取る
$question2 = $_POST['question2'];
$answer2 = $_POST['answer2'];
$question3 = $_POST['question3'];
$answer3 = $_POST['answer3'];

function QA($question,$answer){
    if($question == $answer){
        echo "正解！";
    }else {
        echo "残念...";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    <title></title>
</head>
<body>
    <p><?php echo $name ?>さんの結果は・・？</p>
    <p>①の答え</p>
    <!--作成した関数を呼び出して結果を表示-->
    <?php QA($question1,$answer1) ?>
    <p>②の答え</p>
    <?php QA($question2,$answer2) ?>
    <p>③の答え</p>
    <?php QA($question3,$answer3) ?>
    
</body>
</html>


