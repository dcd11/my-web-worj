<?php
// ООП

// класс - шаблон, каркас для создания объектов
// объект - экземпляр класса
// свойство - переменная, объеявленная в классе

// модификаторы доступа: public, private, protected

// Создания класса
class Cars{
    // свойства
    public $maker;
    public $model;
    public $color;
    public $weight;

    // методы
    public function sayHello(){
        echo "<h2>Hello, user</h2>";
    }
}

// создаем объект (экземпляр) класса Cars
$car1 = new Cars();

//  Задаем значения свойствам
$car1->maker = 'Honda';
$car1->model = 'Accord';
$car1->color = 'Blue';
$car1->weight = 1500;

print_r($car1);