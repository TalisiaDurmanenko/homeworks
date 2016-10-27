<?php

/*Создать функцию, которая будет выводить на экран массив внутри тегов <pre></pre>
В зависимости от значения второго аргумента функции, выводить используя var_dump или print_r.
о умолчанию использовать print_r*/

$array = array(1, 2, 4, 54, 3);
function showArray($x, $y, $z)
{
    if(is_scalar($y)){
        echo "<pre>";
        var_dump($x);
        echo "</pre>";
    }

};

$function = showArray($array);
echo $function;