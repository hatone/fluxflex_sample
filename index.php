<?php
$project_name = 'DUMMY_PROJECT_NAME';
$database_name = 'DUMMY_DB_NAME';
$database_host = 'DUMMY_DB_HOST';
$database_password = 'DUMMY_DB_PASSWORD';
$test_env = $_SERVER['HTTP_X_FLX_FOO'];


echo "hello fluxflex!!<br /><br />";
echo "ホスト名は".$database_host."です。<br />";
echo "データベース名は".$database_name."です。<br />";
echo "ユーザ名は".$project_name."です。<br />";
echo "パスワードは".$database_password."です。<br /><br />";

echo "SetENV:HTTP_X_FLX_FOOの値は".$test_env."です。<br />";
?>
