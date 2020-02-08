<?php
require_once("connectionbd/connection.php");

// получаем данные из массива пост
$surname = $_POST['surname'];
$name = $_POST['name'];
$second_name = $_POST['second_name'];
$age = $_POST['age'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// хэшиируем пароль
$password = md5($password . "qefgh4ijJ23hof23h");

// добавляем запись о пользователе в бд
$mysqli->query("INSERT INTO `Users` (`surname`,`name`,`second_name`,`age`,`password`,`email`,`phone`) 
VALUES ('$surname','$name','$second_name','$age','$password','$email','$phone')");

// закрываем соединение с бд
$mysqli->close();

// переходим на главную
header("Location: /");

