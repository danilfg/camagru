<?php
// файл db.php
error_reporting(E_ALL);

$connect_info = "mysql:host=127.0.0.1; dbname=mysql; charset=utf8";

$connect_opt = array(
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
);
try {
    $db = new PDO($connect_info, 'mysql', 'mysql', $connect_opt); // username, passwd подставляешь свои значения
}
catch (PDOException $e)
{
    die($e->getMessage());
}