<?php
$arr = ['a', 'b', 'c', 'd'];
//echo $arr;
var_dump($arr);

echo $arr[0];
echo $arr[1];
echo $arr[2];

echo $arr[0] . "+" . $arr[1] . "+" . $arr[2] . "+" . $arr[3];

$arr = [1, 2, 3];
echo array_sum($arr);

$arr = [2,5,3,9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;

$arr =[1 => 'a', 2 => 'b', 3 =>'c'];

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = [1 => 'Январь', 2 => 'Январь',3=> 'Январь', 4 => 'Январь', 5 => 'Январь', 6 => 'Январь', 4 => 'Январь', 8 => 'Январь', 9 => 'Январь', 10 => 'Январь',11 => 'Январь', 12 => 'Январь'];

$user = ['name' => "Игорь", 'surname' => "Пронькин", 'patronymic' => "Игоревич"];
echo "$user[surname] "."$user[name] "."$user[patronymic]";

$date = ['year' => '2023', 'month' => 'august', 'day' => 'Thursday, 31'];
echo $date['year'].$date['month'].$date['day'];

$arr = ['a', 'b', 'c', 'd', 'e'];

echo var_dump(count($arr));

$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4];
echo count($arr);

$arr = ['a', 'b', 'c', 'd', 'e'];
echo array_pop($arr);

echo $arr[count($arr)-2];

$arr = ['a' => 1, 'b' => 2, 'c' => 3];

$arr['a'] += 3;
$arr['b'] += 3;
$arr['c'] += 3;

var_dump($arr);

//Дан следующий код:
//   Ответ - 3 1 1
//<?php
//    $arr = ['a' => 1, 'b' => 2, 'c' => 3];
//
//    $arr['a']++;
//    $arr['a']++;
//    $arr['b']--;
//    $arr['c']--;
//    $arr['c']--;
//
//    var_dump($arr);
//
$arr = [];

$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;
var_dump($arr);

$arr = [1, 2, 3];

array_push($arr, 4);
array_push($arr, 5);
var_dump($arr);

$arr = [];

$arr['year'] = 2023;
$arr['month'] = "august";
$arr['day'] = 31;

var_dump($arr);

$arr = [1, 2, 3, 4, 5];

$key1 = 1;
$key2 = 2;
echo $key1 + $key2;
