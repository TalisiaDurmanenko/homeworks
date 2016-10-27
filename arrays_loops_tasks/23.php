<?php
/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.*/

$x = 234234535;

if(is_int($x) !== true){
    exit("Mistake");
}


$array = str_split($x);
$sum = array_sum($array);

echo "$x<br>";
echo "$sum<br>";

$x = "234234535";

if(is_int($x) !== true){
    exit("Mistake");
}


$array = str_split($x);
$sum = array_sum($array);

echo "$x<br>";
echo "$sum<br>";


