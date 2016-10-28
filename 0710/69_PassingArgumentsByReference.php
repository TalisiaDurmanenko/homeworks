<?php

/*Создать функцию, которая принимает один аргумент в виде массива
и дописывает в него последним элементом количество значений массива*/

// Значення в масив записуються типу string в усіх випадках (і коли вводиться число теж).
// На це можно впливати? Як тут використатит set_type()?

function showArray($x)
{

    $array = str_split($x);
//    foreach($array as $item){
//        if($item ){
//            set_type($item, "integer");
//        }
//    }
    $array[] = count($array);
    echo "<pre>";
    var_dump($array);
    echo "</pre>";
};

$a = "vgd23423fg";
$function = showArray($a);
echo "<br>";
echo $a;
