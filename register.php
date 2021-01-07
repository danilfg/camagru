<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/my_bootstrap.css">
    <title>Registration | Camagru Forever</title>
</head>
<body>
    <?php require('src/header.php'); ?>
    <div class="container mt-5">
        <h3>Registration:</h3>
        <form action="check.php" method="post">
            <label>
                <input type="email" name="email" placeholder="Enter email" class="form-control">
            </label><br>
            <label>
                <input name="login" placeholder="Enter login" class="form-control" >
            </label><br>
            <label>
                <input type="password" name="password" placeholder="Enter password" class="form-control">
            </label><br>
            <button type="submit" name="send" class="btn btn-success">Зарегистрироваться</button>
        </form>
    </div>
    <?php require('src/footer.php'); ?>
</body>
</html>