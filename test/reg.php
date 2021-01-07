<html lang="ru">
<head>
    <title>Регистрация</title>
</head>
<body>
<h2>Регистрация</h2>
<form action="save_user.php" method="post">
    <!--**** save_user.php - это адрес обработчика. То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей отправятся на страничку save_user.php методом "post" ***** -->
    <p>
        <label>Ваш логин:<br></label>
        <label>
            <input name="login" type="text" size="30" maxlength="20">
        </label>
    </p>
    <!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
    <p>
        <label>Ваш email:<br></label>
        <label>
            <input name="email" type="text" size="30" maxlength="30">
        </label>
    </p>
    <!--**** В текстовое поле (name="email" type="text") пользователь вводит свой email ***** -->
    <p>
        <label>Ваш пароль:<br></label>
        <label>
            <input name="password" type="password" size="30" maxlength="20">
        </label>
    </p>
    <!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** -->
    <p>
        <input type="submit" name="submit" value="Зарегистрироваться">
        <!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** -->

        <br><a href="../index.php">Авторизироватся</a>
    </p>
</form>
</body>
</html>
