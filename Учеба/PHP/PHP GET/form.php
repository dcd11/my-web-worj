<?php
//print_r($_GET);
$firstName = htmlspecialchars(trim($_GET['firstName']));
$login = htmlspecialchars(trim($_GET['login']));
$email = htmlspecialchars(trim($_GET['email']));
$password = htmlspecialchars(trim($_GET['password']));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hello, <?=$_GET['firstName']?></title>
</head>
<body>
    <h2>Привет, <?=$firstName?></h2>
    <p>Логин: <?=$login?></p>
    <p>Почта: <?=$email?></p>
    <p>Пароль: <?=$password?></p>
</body>
</html>
