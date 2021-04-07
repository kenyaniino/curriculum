<?php

$sun = 0;
while($sun < 10){
    echo $sun."<br>";
    $sun++;
}
?>

<?php

for($i=0;$i<10;$i++){
    echo $i;
}
?>

<?php
$a = 0;
while($a < 10){
    echo $a;
    $a++;
    if($a == 5){
        break;
    }
}

?>

<?php
for($aaa=0;$aaa<10;$aaa++){
    echo $aaa."<br>";
}
?>

<?php
$countries = ["Japan","America","China","Korea"];
echo $countries[0];
echo $countries[1];
echo $countries[2];
echo $countries[3];
var_dump($countries);
echo "<br>";
?>

<?php
$fruits = ["りんご","みかん","ぶどう"];
$fruits[3] = "もも";
echo $fruits[0];
echo'<br>';
echo $fruits[1];
echo'<br>';
echo $fruits[2];
echo'<br>';
var_dump($fruits);
echo'<br>';


$fruits = ["apple" => "りんご","orange" => "みかん","grape" => "ぶどう"];
$fruits["peach"] = "もも";
echo $fruits["apple"];
echo $fruits["orange"];
echo $fruits["grape"];
echo'<br>';
var_dump($fruits);

?>






