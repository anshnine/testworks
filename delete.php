<?php

// подключение к бд
require_once("connectionbd/connection.php");

// получаем id пользователя из массива пост
$id = $_POST['id'];

// удаляем пользователя
$mysqli->query("DELETE FROM Users WHERE id='$id'");

// закрываем соединение
$mysqli->close();

// возвращаемся на главную
header("Location: /");





