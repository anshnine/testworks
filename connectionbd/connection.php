<?php
$mysqli = new mysqli('localhost', 'root', 'root', 'User');

/* проверка подключения */
if ($mysqli->connect_errno) {
    printf("Не удалось подключиться: %s\n", $mysqli->connect_error);
    exit();
}