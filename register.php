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
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form>
    <label>ФИО</label>
    <input type="text" name="full_name" placeholder="Введите свое полное имя">
    <label>Логин</label>
    <input type="text" name="login" placeholder="Логин">
    <label>Почта</label>
    <input type="email" name="email" placeholder="Введите свою почту"
    <label>Изображение профиля</label>
    <input type="file" name="avatar" >
    <label>Пароль</label>
    <input type="password" name="password" placeholder="Введите пароль">
    <label>Подтверждение пароля</label>
    <input type="password" name="password_confirmed" placeholder="Повториет пароль">
    <button type="submit" class="register-btn">Зарегистрироваться</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>
    </p>
    <p class="msg none">Lorem ipsum dolor sit amet. </p>

</form>
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
