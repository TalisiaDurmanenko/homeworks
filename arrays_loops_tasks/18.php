<?php
/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели,
выходные дни следует вывести жирным.*/

$week = array('mon', 'tue', 'wed', 'thu', 'fri', 'sat', 'sun');
$i = 0;
foreach($week as $day){
    if($i >= 5){
        echo "<strong>$day</strong><br>";
    }
    else {
        echo "$day<br>";
    }
    $i++;
}