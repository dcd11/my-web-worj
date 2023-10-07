<?php
// Функции
$fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
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

//print_r($fruits);

// function(вызовы функции) debug(названии функции, произвольное)($value) - интерпритатор
function debug($value){
    echo '<pre>';
    print_r($value);
    echo '</pre>';
};
//debug($fruits);
//debug($users);


$firstName = 'Анна';

//function sayHello($name)
//{
//    echo "Привет, $name";
//}
//
//sayHello($firstName);

//function sayHello()
//{
//    echo "Привет, " . $GLOBALS['firstName'];
//}
//
//sayHello();
//
//function getSum($num1, $num2)
//{
//    return $num1 + $num2;
//}
//
//$res1 = getSum(4,6);
//$res2 = getSum(5, 1);
//echo $res1;
//echo $res2;

//debug($_SERVER)

?>



<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <link rel="stylesheet" href="style.css">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--    --><?//= debug($users)?>
<!--</body>-->
<!--</html>-->
