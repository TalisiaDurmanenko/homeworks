<?php

$s = "Hello world!";
$x = strlen($s); // Повертає довжину рядка (12)
echo "{$x}<br>";

$y = strpos($s, 'ello');
var_dump($y); // int(1)
echo "<br>";

$replace = 'j';
$new = str_replace('l', $replace, $s); // Заміна "l" на "j"
echo "{$new}<br>";

$str = "dfjwkjsdwsdfjlaj";
$array = explode('j', $str); // розбиває рядок на масив за вказаним символом (-лами)
print_r($array);
echo "<br>"; // Array ( [0] => df [1] => wk [2] => sdwsdf [3] => la [4] => )

