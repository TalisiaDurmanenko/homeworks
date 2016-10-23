<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 20
рядов, а не 5.
x
xx
xxx
xxxx
xxxxx*/

$x = null;
$pyramid = array();
for($i = 1; $i <= 20; $i++){
    $pyramid[] = $i;
}

foreach($pyramid as $item){
    $x .= 'x';
    echo "$x<br>";
}