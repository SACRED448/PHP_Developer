<?php //Подключение к БД
$connect = mysqli_connect("localhost", "root", "", "History");
if (!$connect) {
    die("Ошибка подключения к БД");
}

?>
