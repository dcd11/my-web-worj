<?php
$title = 'Автомобили';
require './components/header.php' ?>
<div class="cars">
    <?php foreach ($cars as $car):?>
    <div class="car">
        <h2>Производитель: <?=$car['maker']?>, Модель:  <?=$car['model']?></h2>
        <img src=" <?=$car['image']?>" alt="<?=$car['maker']?>, <?=$car['model']?>">
        <p>Год выпуска: <?=$car['made_year']?>г.в.</p>
        <p>Максимальная скорость: <?=$car['top_speed']?> км/час</p>
        <p>Ускорение до 100: <?=$car['acceleration_to_100']?>с.</p>
        <p>Мощность: <?=$car['power']?> лс</p>
        <p>Масса: <?=$car['weight']?> кг.</p>
        <a href="car_detail.php?id=<?=$car['id']?>">Подробнее...</a>
    </div>
    <?php endforeach?>
</div>
<?php require './components/footer.php' ?>

