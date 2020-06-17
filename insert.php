<?php
$pdo = new PDO('sqlite:testSQL.sqlite3');
$pdo -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
$sql='INSERT INTO testSQL(kata) VALUES(:bind)';
$data = array('bind'=>$_GET["hw"]);
$stmt = $pdo->prepare($sql);
if($stmt->execute($data)){
    print '成功';
}else{
    print '失敗';
}