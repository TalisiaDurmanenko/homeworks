<?php
/* Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.*/

for($i = 0; $i < 30; $i++){
    $array[] = rand(); // створено масив
}
echo "<pre>";
var_dump($array);


$max = max($array); // знайдено максимальне значення
$keyMax = array_search($max, $array); // ключ максильманого значення
$min = min($array); // знайдено мінімальне значення
$keyMin = array_search($min, $array); // ключ мінімального значення

echo "<br>";
echo "<br>";
echo "min = {$min}, ключ - {$keyMin}, max = {$max}, ключ - {$keyMax}";
echo "<br>";
echo "<br>";

$array[$keyMax] = $array[$keyMin] + $array[$keyMax];
$array[$keyMin] = $array[$keyMax] - $array[$keyMin];
$array[$keyMax] = $array[$keyMax] - $array[$keyMin]; // максимальне <-> мінімальне

echo "<pre>";
var_dump($array);

$max = max($array);
$keyMax = array_search($max, $array);
$min = min($array);
$keyMin = array_search($min, $array);

echo "<br>";
echo "<br>";
echo "min = {$min}, ключ - {$keyMin}, max = {$max}, ключ - {$keyMax}";
