<?php
try {
    if(true)
    {
         throw new Exception('例外が発生しました');
    }
} catch (Exception $e) {
    echo $e->getMessage(), "\n";
} finally {
    echo 'finallyの処理';
}
echo '例外発生後の処理';