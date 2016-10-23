<?php
/*Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, а текущий
месяц выведите жирным. Текущий месяц должен храниться в переменной $month.*/

$months = array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$month = 'October';

foreach($months as $item){
    if($item == $month){
         echo "<strong>{$item}</strong>";
    }
    else {
        echo $item;
    }
};