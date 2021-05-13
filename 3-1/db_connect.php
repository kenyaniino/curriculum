<?php
    define('DB_DATABASE', 'yigroupBlog');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'root');
    define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);
    define('DB_PASSWORD', 'hogehoge');
    
    try {
        $dbh = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
        echo 'DBと接続しました。';
        $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    } catch (PDOException $e) {
        echo 'Error:' . $e->getMessage();
        die();
    }
    ?>