<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my_bootstrap.css">
    <title>Camagru Forever</title>
</head>
<body>

<?php require('src/header.php'); ?>
<?php
if (isset($_POST['login'])) {
    $login = $_POST['login'];
    if ($login == '') {
        unset($login);
    }
} //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if ($email == '') {
        unset($email);
    }
} //занесение логина и проверка на пустое значение
if (isset($_POST['password'])) {
    $password=$_POST['password'];
    if ($password =='') {
        unset($password);
    }
}
//заносим введенный пользователем пароль в переменную $password, если он пустой, то уничтожаем переменную
if (empty($login) or empty($password) or empty($email)) //если пользователь не ввел логин или пароль, то выдаем ошибку и останавливаем скрипт
{
    exit ("Вы ввели не всю информацию, вернитесь назад и заполните все поля!");
}
//если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
$login = stripslashes($login);
$login = htmlspecialchars($login);
$email = stripslashes($email);
$email = htmlspecialchars($email);
$password = stripslashes($password);
$password = htmlspecialchars($password);
//удаляем лишние пробелы
$login = trim($login);
$email = trim($email);
$password = trim($password);
// подключаемся к базе
include ("setup.php");// файл db.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь
// проверка на существование пользователя с таким же логином


$query = $db->prepare("SELECT * FROM users WHERE login=?");
$query ->execute([$login]);
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    exit ("Извините, введённый вами логин уже зарегистрирован. Введите другой логин. <a href='reg.php'>Вернутся к регистрации</a>");
}
// проверка на существование пользователя с такой же почтой
$query = $db->prepare("SELECT * FROM users WHERE email=?");
$query ->execute([$email]);
$result = $query->fetch(PDO::FETCH_ASSOC);

if ($result) {
    exit ("Пользователь с такой же почтой уже зарегистрирован. <a href='reg.php'>Вернутся к регистрации</a>");
}

// если такого нет, то сохраняем данные
$query2 = ("INSERT INTO users (login, email, password) VALUES(:login, :email, :password)");
$result2 = $db->prepare($query2);
$pdo_res = $result2->execute(array('login'=>$login, 'email'=>$email, 'password'=>$password));


// Проверяем, есть ли ошибки

if ($pdo_res=='TRUE')
{
    echo "Вы успешно зарегистрированы! Теперь вы можете зайти на сайт. <a href='index.php'>Главная страница</a>"; // ссылка
}
else {
    echo "Ошибка! Вы не зарегистрированы.";
}
?>

<?php require('src/footer.php'); ?>
</body>
</html>