<?php

require_once(__DIR__ . '/configs.php');

$db_dsn = 'mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME.';';
$db_user = DB_USER;
$db_pass = DB_PASS;

$bd = new PDO($db_dsn, $db_user, $db_pass);