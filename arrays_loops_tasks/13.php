<?php
//Вывести таблицу умножения

$i = 1;
$result = null;
while($i <= 9){
    $j = 1;
    while($j <= 9){
        $result = $i * $j;
        echo "{$result} ";
        $j++;
    }
    echo "<br>";
    $i++;
}