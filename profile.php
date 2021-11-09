<?php
session_start();
require "vendor/connect.php";
global $connect;
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
    <img src="<?php echo $_SESSION['user']['avatar']; ?>" width="300" style="display: block; text-align: center;" alt="avatar">
    <h2 style="margin: 10px ;"> <?php echo $_SESSION['user']['full_name']; ?> </h2>
    <a href="#"><?php echo $_SESSION['user']['email']; ?></a>
    <a href="vendor/logout.php" class="logout">Выход</a>
</form>
</body>
</html>
