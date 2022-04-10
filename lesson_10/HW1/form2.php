<?php
$a = htmlspecialchars($_POST['telephone']);
setcookie('telephone', $a);

?>

<html lang="ru">
<body>
<form action="form2.php" method="POST">
    <h1>Запрос ФИО</h1>

    <p>Вdедите ФИО : <br>
        <input type="text" name="surname" placeholder="Иванов" size="18"  maxlength="20">
        <input type="text" name="name" placeholder="Иван" size="15" maxlength="15">
        <input type="text" name="last name" placeholder="Иваныч" size=15" maxlength="20">
    </p>

    <p>Номер:
        <input type="tel" name="telephone" size="15" placeholder="380501234567" maxlength="13" value="<?php print_r($a);?>">
    </p>

    <input type="submit" value="Отправить">
</form>
</body>
</html>
