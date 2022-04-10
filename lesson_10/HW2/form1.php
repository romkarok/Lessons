<?php session_start();
?>
<html lang="ru">
<body>
<form action="form2.php" method="POST">
    <h2>Введите имя :</h2>
    <p>
        <input type="text" name="name" placeholder="Иван" size="15" maxlength="15" >
    </p>

    <input type="submit" value="Отправить">
</form>
</body>
</html>
