<?php
// https://devionity.com/ru/courses/php-fundamentals/php-optional-arguments
/*Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r.
о умолчанию использовать print_r*/

// Що означає "В зависимости от значения второго аргумента функции"?


$arrayX = array(1, 2, 4, 54, 3);
$arrayY = array('dfdsf' => 'ds', 67 => 32);
$arrayZ = array(432, 2345 , 2323);
function showArray($x, $y, $z)
{
    echo "<pre>";
    var_dump($x);
    echo "<br>";
    foreach($y as $key => $item){
        if(is_int($key) !== true){
            var_dump($y);
            break;
        }
        else
            print_r($y);
    }
    echo "<br>";
    var_dump($z);
    echo "</pre>";
};

$function = showArray($arrayX, $arrayY, $arrayZ);
