<?php
$a = 7;
$b = match (true) {
    $a <= 5 => 'low',
    $a <= 10 => 'ok'
};

// типи данных string, int, float, boolen
$c = 5.2;
var_dump($c);//вывод типа переменной и ее значения
settype($c, 'string');// изменение типа переменной
echo gettype($c);// показ типа переменной
echo $c;

echo is_string($c); //являеться переменная типа стринга

var_dump(isset($a)); // существует переменная или нет

// array
$arr = [];
echo gettype($arr);
// виды массива
//нумерованый (где ключ - это порядковый номер)
$arr1 = [1, 3, 5];
// асоциативный
$arr2 = [
    "city1" => "Dnipro",
    "city2" => "Kyiv",
    "city3" => "Lviv"
];
array_push($arr2,"Donetsk");// добивавление елемента в массив
array_unshift($arr2, "I am from");
echo count($arr2);
arsort($arr2);
var_dump($arr2);

$arr1 =[1,2,3];
$arrNew = array_merge($arr2, $arr1);//обьединение 2 мвссивов
var_dump($arrNew);
var_dump(array_reverse($arrNew));// массив в противоположном порядке
echo is_array($arrNew);
//explode();//строку в массив
//implode();//массив в строку
//$user =new stdClass; //создание нового обьекта из класса
//$user->name = "Marina";
//var_dump($user);