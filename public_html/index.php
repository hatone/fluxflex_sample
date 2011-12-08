<?php
$database_name = 'DUMMY_DB_NAME';        
$database_password = 'DUMMY_DB_PASSWORD';
$test_env = $_SERVER['HTTP_X_FLX_HOGE'];


echo "hello fluxflex!!";
echo "あなたのデータベースのデータベース名は".$database_name."です。";
echo "あなたのデータベースのパスワードは".$database_password."です。";
echo "あなたのSetENVの値は".$test_env."です。";
 ?>
