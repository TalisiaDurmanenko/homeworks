<<<<<<< HEAD
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

=======
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

>>>>>>> 1937558703ec782ebdc56f6abe92c2a3b3d20042
