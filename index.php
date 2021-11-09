<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: profile.php');
}
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
<form>
    <label>Login</label>
    <input type="text" name="login" placeholder="Введите логин">
    <label>Parol</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <button type="submit" class="login-btn">Вход</button>
    <p>
        У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь</a>
    </p>
    <p class="msg none">Lorem ipsum dolor sit amet. </p>


</form>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
