<?php session_start();
$nam = htmlspecialchars($_POST['name']);
$_SESSION["name"] = "$nam";
$name = $_SESSION["name"];
?>
<html lang="ru">
<body>
<form action="form3.php" method="POST">
    <h2>Введите фамилию :</h2>
    <p>
        <input type="text" name="surname" placeholder="Иванов" size="20" maxlength="20">
    </p>

    <input type="submit" value="Отправить">
</form>
</body>
</html>