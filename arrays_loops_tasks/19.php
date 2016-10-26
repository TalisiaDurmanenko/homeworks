<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а
текущий день выведите курсивом. Текущий день должен храниться в переменной $day.*/
$week = array('Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun');
$day = date("D");

foreach($week as $item){
    if($item == $day){
        echo "<em>$item</em><br>";
    }
    else {
        echo "$item<br>";
    }
}