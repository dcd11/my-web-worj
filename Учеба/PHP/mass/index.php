<?php 
// массивы

// $numbers = array(;4,5,8,4,2,5,7,9);
$numbers = [4,5,8,4,2,5,7,9];
$fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
$pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
$animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
//print_r($numbers)

//echo $numbers[3];

//echo $pets[2];

// echo $numbers[3] . ' ' . $pets[2];
// echo count($animals);

//echo "<h2>$animals[0] $animals[4]</h2>";

// $output = $animals[2], $animals[4];


// Копирование массива
// $newFruits = $fruits;
// array_push($newFruits, 'Гранат');
// print_r($newFruits);
// print_r($fruits);


// ссылка 
$newFruits = &$fruits;
// array_push($newFruits, 'Гранат');
//print_r($newFruits);
//print_r($fruits);


// ассоциативные массивы 
// $user = ['firstName' => 'Ivan', 'lastName' => 'Ivanov', 'age' => 33, 'avatar' => 'user.jpg' ]; // ассоциативный массив

$student = [
    'firstName'=> "Igor",
    'lastName'=> "Pronkin",
    'age'=> 34,
    'phones'=> ['01', '02', '03', '04'],
    'address' => ['city'=> "Moscow",
    'house number' => 33,
    'street'=> "Chertanovskaya",
    ]
];

//$numbers = [1 => 4, 6, 9, 4, 2];
//$numbers['num1'] = 10;
//print_r($numbers)
// let user = {FistName => 'Ivan',
//             lastName => 'Ivanov',
// }; // JS объект

// echo json_encode($user); пока эт лирика


// echo $user['age'] . ' ' . $user['firstName'];
//echo "<h2> $user[firstName]</h2>"

// массив массивов

$users = [
[
'fName' => "Иван",
'lName' => "Иванов",
'hobbies' => ["Спать", "Гулять", "Читать"],
],
[
'fName' => "Анна",
'lName' => "Иванова",
'hobbies' => ["Спать", "Читать"],
],
[
'fName' => "Ирина",
'lName' => "Сидорова",
'hobbies'=> ["Гулять", "Читать"],
],
];
// print_r($users)


//for - цикл
//for($i = 0; $i <10; $i++) {
//    echo "<p> $i </p>";
//};

// while - цикл
//$i = 0;
//while ($i < 10){
//    echo "<p> $i </p>";
//    $i++;
//};

//foreach - для перебора массивов
//foreach ($fruits as $fruit){ // перебираем массив fruits (существущий) как fruit (фрукт (любая переменная))
//    echo "<p>$fruit</p>";
//}

$user = [
    'firstName' => 'Ivan',
    'lastName' => 'Ivanov',
    'age' => 33,
    'avatar' => 'user.jpg',
    'phones' => ['01', '02', '03', '04']
];
//foreach ($user as $property => $value){
//    if ($property === 'phones'){
//        echo "<p> $property: " . implode(', ', $value) . "</p>";
//    }else {
//        echo "<p>$property: $value</p>";
//    };
//};
$title = 'Массивы';
require 'index_tpl.php'

?> 
