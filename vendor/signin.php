<?php
session_start();
require "connect.php";
global $connect;

$login = $_POST["login"];
$password = ($_POST["password"]);

$error_fields = [];
if ($login === ''){
    $error_fields[] = 'login';
}
if ($password === ''){
    $error_fields[] = 'password';
}

if (!empty($error_fields)){
    $response=[
        "status"=>false,
        "type"=> 1,
        "message"=>"Проверьте правильность полей",
        "fields"=>$error_fields
    ];
    echo json_encode($response);

    die();
}
$password = md5($password);
$check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` ='$password' ");
if ( mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user']=[
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email']
    ];

    $response=[
      "status"=>true
    ];
   // header('Location: ../profile.php');
    echo json_encode($response);
}else{
    $response=[
        "status"=>false,
        "message"=>"Неверный логин или пароль"
    ];
    //$_SESSION['message'] = 'Неверный логин или пароль';
    //header('Location: ../index.php');

    echo json_encode($response);
}
?>