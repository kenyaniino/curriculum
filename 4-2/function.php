<?php
// function.php
/**
 * $_SESSION["user_name"]が空だった場合、ログインページにリダイレクトする
 * 返り値に意味がないことを示す
 * @return void
 */
function check_user_logged_in() {
    // セッション開始
    session_start();
    // セッションにuser_nameの値がなければlogin.phpにリダイレクト
    if (empty($_SESSION["user_name"])) {
        header("Location: login.php");//headerで他のURLに移動リダイレクトする
        exit;
    }
}

/**
 * 引数の値が空だった場合、main.phpにリダイレクトする
 * @param integer 正、負の整数としての値を取得する
 * @return void
 */
function redirect_main_unless_parameter($param) { //引数「$param」を指定することで、「$id」だけでなく他の要素で使用しても違和感なく使用することが出来ます。


    if (empty($param)) {
        header("Location: main.php");
        exit;
    }
}



?>