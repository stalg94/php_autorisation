<?php
session_start();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="vendor/signin.php" method="post">
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Parol</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit">Вход</button>
    <p>
        У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>
