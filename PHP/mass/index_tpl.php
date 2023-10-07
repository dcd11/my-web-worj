<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?= $title ?></title>
</head>
<body>
<div class="user">
    <!-- <img src=<?= $user['avatar']?> alt="avatar" > -->
    <h2> <?= $user['firstName']?> <?= $user['lastName']?></h2>
    <p><?= $user['age']?></p>
    <p></p>
</div>

<div class="student">
    <h2><?= $student['firstName']?> <?= $student['lastName']?></h2>
    <p><?= $student['age']?></p>
    <p><?= implode(' ', $student['phones'])?></p>
    <!----  <p><?= $student['phones'][0]?></p> --->
    <h3>Адрес:</h3>
    <p>Город:<?= $student['address']['city']?></p>
    <p>Улица:<?= $student['address']['street']?></p>
    <p>Дом:<?= $student['address']['house number']?></p>
</div>
<section class="users">
    <?php foreach ($users as $user) : ?>
        <div class="user">
            <h2>Имя: <?= $user['fName']?> Фамилия: <?= $user['lName']?></h2>
            <p>Хобби: <?= implode(', ', $user['hobbies'])?></p>
        </div>
    <?php endforeach; ?>
</section>
</body>
</html>