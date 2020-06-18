<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=sampledb;charset=utf8', 'username', 'password');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'エラーが発生'."<br>";
} finally {
    echo 'finallyの処理'."<br>";
}
echo '例外発生後の処理'."<br>";