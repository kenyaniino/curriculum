<!-- 要素の数を数える -->
<?php
$members = ["a","b","c","d","e","f","g"];
echo count($members);
echo "<br>";
?>

<!-- 要素の並べ替え -->
<?php
$members = ["aoki","niino","takahashi","satou"];
sort($members);
var_dump($members);
echo "<br>";
?>
<?php
$members = [10,22,7,9];
sort($members);
var_dump($members);
echo "<br>";
?>

<!-- 配列に中にある要素が存在しているか -->
<?php
$members = ["aoki","niino","takahashi","satou"];
var_dump(in_array("niino",$members));
echo "<br>";
?>
<?php
$members = ["aoki","niino","takahashi","satou"];
if (in_array("niino",$members)){
    echo "新野いる";
}else {
    echo "新野いない";
}

echo "<br>";
?>

<!-- 配列を結合して文字列に変換 -->
<?php
$members = ["aoki","niino","takahashi","satou"];
$atstr = implode("@",$members);
var_dump($atstr);
echo "<br>";
?>

<!-- 文字列を指定の区切りで配列にする -->
<?php
$members = ["aoki","niino","takahashi","satou"];
$atstr = implode("@",$members);
var_dump($atstr);

$re_membres = explode("@",$atstr);
var_dump($re_membres);
echo "<br>";
?>

<?php
$str = "1,2,3,4,5,6,7";
$array = explode(",",$str);
var_dump($array);
?>


<!-- 
要件定義(要求仕様書)→システムやソフトウェアの開発において、
実装すべき機能や満たすべき性能などのを明確にしていく作業

単体テスト・結合テスト→単体テストは合体前の部品がそれぞれちゃんと動く確認のテストのこと、
結合テストは合体してちゃんと動くかを確認するテストのこと

テスト仕様書(どのようなもの、項目)→どんな条件の元でテストをするか洗い出してまとめたものをファイルや紙に
した資料のこと -->