<?php
// страница детального просмотра одного авто

$cars = require 'data.php';
//echo "<h1>Страница детального просотра ID: $_GET[carId]</h1>";


//получаем id из массива GET
$id = (int)$_GET['carId'];

// если значение поменяли на некорректное (строка)
if (!$id){
   // die('неправильное значение ID');
    header("location: error.html");
}
//var_dump($id);


// получаем по ID массив с авто

$car = null; // объявляем переменную для авто
foreach ($cars as $value) {
    // если ID текущего элемента массива равно полученному ID из массива GET
    if($value['id'] === $id){
        // кладем в переменную с авто текущий элемент массива
        $car = $value;
    }
}
//print_r($car);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$car['maker'].' '.$car['model']?>></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="car-item">
        <img src="<?=$car['image']?>" alt="<?=$car['maker'].' '.$car['model']?>">
            <div class="car-info">
                <h2><?=$car['maker'].' '.$car['model']?></h2>
                <p>Год выпуска: <span><?=$car['made_year']?> г</span></p>
                <p>Максимальная скорость: <span><?=$car['top_speed']?> км/ч</span></p>
                <p>Ускорение до 100км/ч: <span><?=$car['acceleration_to_100']?> с</span></p>
                <p>Мощность: <span><?=$car['power']?> л/с</span></p>
                <p>Масса: <span><?=$car['weight']?> кг</span></p>
            </div>
            <a href="index.php">К списку авто</a>
    </div>
</body>
</html>
