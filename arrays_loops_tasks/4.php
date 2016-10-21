<?php
/* Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, с
помощью второго — столбец элементов.*/

$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach($arr as $key => $item) {
    echo $key . "<br>";
}

foreach($arr as $key => $item) {
    echo $item . "<br>";
}
// PHP_EOL замість "<br>" виводить в рядок, а не в стовпчик. Чому?