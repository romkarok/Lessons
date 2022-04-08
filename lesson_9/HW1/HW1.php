
<html lang="ru">
<body>
<form action="form.php" method="POST">
    <h1>Резюме</h1>

    <p>Прикрепите фото : <br>
    <input type="file" name="imag" accept="image/*, .jpg, .png, .jpeg" />
    </p>
    <p>Ведите ФИО : <br>
        <input type="text" name="surname" placeholder="Иванов" size="18"  maxlength="20">
        <input type="text" name="name" placeholder="Иван" size="15" maxlength="15">
        <input type="text" name="last name" placeholder="Иваныч" size=15" maxlength="20">
    </p>

    <p>Дата рождения: <br>
        <input type="numder" name="day" size="5" min="1" max="31" placeholder="15" maxlength="2" require>
        <input type="numder" name="month" size="5" min="1" max="12" placeholder="01"maxlength="2" require>
        <input type="numder" name="year" size="5" min="1900" max="2022" placeholder="1999" maxlength="4" require>
    </p>
    <p>Номер:
        <input type="tel" name="telephone" size="15" placeholder="380501234567" maxlength="13">
    </p>
    <p>Email:
        <input type="email" name="email" placeholder="ivanovivan@gmail.com" size=25">
    </p>
    <p>Женат ? <br>
        <input type="radio" name="Married" value="Да" /> Да
        <input type="radio" name="Married" value="Нет" /> Нет
    </p>

    <p>Кратко о себе: <br>
        <textarea name="comment" maxlength="500" ></textarea>
    </p>
    <input type="submit" value="Отправить">
</form>
</body>
</html>