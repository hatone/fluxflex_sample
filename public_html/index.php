<?php
$database_name = 'DUMMY_DB_NAME';        
$database_password = 'DUMMY_DB_PASSWORD';
$test_env = $_SERVER['HTTP_X_FLX_FOO'];


echo "hello fluxflex!!<br /><br />";
echo "あなたのデータベースのデータベース名は".$database_name."です。<br />";
echo "あなたのデータベースのパスワードは".$database_password."です。<br />";
echo "あなたのSetENV:HTTP_X_FLX_FOOの値は".$test_env."です。<br />";
 ?>
