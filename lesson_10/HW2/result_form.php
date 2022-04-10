<?php session_start();
$ag = htmlspecialchars($_POST['age']);
$_SESSION["age"] = "$ag";
$age = $_SESSION["age"];
$name = $_SESSION["name"];
echo "Имя: $name <br>";
$surname = $_SESSION["surname"];
echo "Фамилия: $surname <br>";
echo "Возраст: $age <br>";
