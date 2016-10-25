<?php
/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9
рядов, а не 5.
1
22
333
4444
55555*/

$x = null;
$pyramid = array();
for($i = 1; $i <= 9; $i++){
    $pyramid[] = $i;
};

foreach($pyramid as $item){
    $x .= $item;
    echo "$x<br>";
};

echo "<br>";

$x = null;
for ($i = 1; $i <= 9; $i++)
{
    for ($j = 0; $j < $i; $j++)
    {
        $x .= $i;
    }
    echo $x.'<br>';
    $x = null;
    $j = 0;
}