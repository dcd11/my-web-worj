<?php $menu = require './components/menu.php';?>
<?php include 'data.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?? 'ООО Рога и копыта'  ?></title>
</head>
<body>
<header>
    <div class="logo">LOGO</div>
    <h1><?= $title ?? 'ООО Рога и копыта'  ?></h1>
    <nav>
        <ul>
           <?php
           foreach ($menu as $link => $description){
               echo "<li><a href='$link'>$description</a></li>";
           };
           ?>
        </ul>
    </nav>
</header>