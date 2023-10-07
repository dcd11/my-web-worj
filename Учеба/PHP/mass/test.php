<?php
$firtsName = 'Ivan'
$lastName = 'Ivanov'
$age = 22;
$isHappy = true; 
$children = null;
$hobbies =['Спать', 'Есть', 'Гулять'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="user">
        <h2>Имя: <?php echo $firtsName ?>Фамилия:<?= $firtsName ?></h2>
        <p>Возраст:<?= $age ?></p>
        <p>Счастлив?:<?= $isHappy ? 'Yes' : 'Nope' ?></p>
        <p>Есть ли дети:<?= $children ?></p>
    </div>
    <form action="form.php" method="POST">
        <label>Имя:</label>
        <input type=text name=firstName><br>

        <label>Фамилия:</label>
        <input type=text name=firstName><br>
        <intup type=submit value=Отправить>

    
    </form>
</body>
</html>