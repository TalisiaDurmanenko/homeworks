<?php

/*Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а
русские — в массив $ru.*/

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
//$en = array()
//$ru = array();

foreach($arr as $eng => $rus) {
    $en[] = $eng;
    $ru[] = $rus;
};
var_dump($en);
echo "<br>";
var_dump($ru);

