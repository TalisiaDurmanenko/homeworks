<?php
//Определить рекурсивную функцию - аналог функции print_r

$array = array(
    1 => 'a',
    2 => 'b',
    3 => 'c',
    4 => array(
        10 => 'j',
        11 => 'k',
        12 => array(
            20 => 't',
            21 => 'u'
        )
    )
);

function echofun($n){
    foreach($n as $key => $item){
        if(is_array($item)) {
            echofun($key);
        }
        else echo "{$key} = > {$item}<br>";
    }
    echo "{$key} = > {$item}<br>";
};

echofun($array);