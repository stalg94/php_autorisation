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
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="vendor/signup.php" method="POST" enctype="multipart/form-data">
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
    <button type="submit">Вход</button>
    <p>
        У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь</a>
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
