<?php session_start();
$sur = htmlspecialchars($_POST['surname']);
$_SESSION["surname"] = "$sur";
$surname = $_SESSION["surname"];
?>
<html lang="ru">
<body>
<form action="result_form.php" method="POST">
    <h2>Введите возраст :</h2>
    <p>
        <input type="number" name="age" placeholder="20" size="15" maxlength="15" min="0" max="100">
    </p>

    <input type="submit" value="Отправить">
</form>
</body>
</html>
