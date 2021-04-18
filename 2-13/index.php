<!-- 切り上げ -->
<?php
$x = 5.5;
echo ceil($x);
echo "<br>";
?>

<!-- 切り捨て -->
<?php
$x = 5.4;
echo floor($x);
echo "<br>";
?>

<!-- 四捨五入 -->
<?php
$x = 5.6;
echo round($x);
echo "<br>";
?>

<!-- 円周率 -->
<?php
echo pi();
function circleArea($r){
    $circle_area = $r * $r * pi();
    echo $circle_area;
    echo "<br>";
}
circleArea(9);
?>

<!-- 乱数 -->
<?php
echo mt_rand(0,111);
echo "<br>";
?>

<!-- 文字列の長さ -->
<?php
$str = "yabukijyou";
echo strlen($str);
echo "<br>";
?>

<!-- 検索 -->
<?php
$str = "yabukijyou";
echo strpos($str,"i");
echo "<br>";
?>

<!-- 文字列の切り取り -->
<?php
$str = "yabukijyou";
echo substr($str,6,4);
echo "<br>";
?>

<!-- 置換 -->
<?php
$str = "yabukijyou";
echo str_replace("jyou","ジョー",$str);
echo "<br>";
?>

<!-- フォーマット化した文字列を出力 -->
<?php
$name = "力石徹";
$limit_number = 10;
printf("%sはバンタム級まであと%dキロ減量しよう", $name,$limit_number);
echo "<br>";
$limit = "2";
printf("力石徹は試合まであと%02d分",$limit);
echo "<br>";
?>

<!-- 変数に代入できるprintf -->
<?php
$name = "力石徹";
$limit_number = 10;
$limit_time = sprintf("%sはバンタム級まであと%dキロ減量しよう", $name,$limit_number);
echo $limit_time;
echo "<br>";
?>

<!--  PostgreSQL・Oracle SQL→PostgerSQLはMySQLを使いたくない人が使うデータベース
Oracle SQLはオラクル社が出しているSQL


 TortoiseGit・TortoiseSVN→TortoiseGitはGNU General publicLicenseのもとに配布されているフリーソフトウェア
 TortoiseSVNは集中型バージョン管理システム「Subversion(SVN)」のWindows用GUIソフト

 外部設計・内部設計→外部設計は機能や性能、制約条件を元にしてシステムの基本となる設計をすること
 内部設計は外部設計を元にシステムの内部の動作や機能、物理データなどのユーザーから見えにくい詳細なところの設計をすること -->