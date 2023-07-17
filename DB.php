<?php
define('DB_HOST', 'testDB');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');

$mysql = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysql->connect_errno) {
    echo ('System error');
} else {

    $query = "SELECT text1 FROM `test` WHERE id = 2";
    $result = $mysql->query($query);


    $row = $result->fetch_row(); // Извлекаем первую строку
    $columnValue = $row[0]; // Обращаемся к нужному столбцу (здесь это первый столбец)
    echo $columnValue;
}

$mysql->set_charset('utf8');
$mysql->close();
?>
