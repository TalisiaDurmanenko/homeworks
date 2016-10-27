<?php

$arr = array('one', 'two', 'three');
echo count($arr); // Повертає кількість елементів в масиві: 3
echo "<br>";

$arr = array('one', 'two', 'three');
array_push($arr, 'Four');
print_r($arr); // Array ( [0] => one [1] => two [2] => three [3] => Four )
echo "<br>";

$arr = array(1,2,2,2,3,4,2,2,1);
$arr_u = array_unique($arr);
print_r($arr_u); // (1,2,3,4)
echo "<br>";

$arr = array('one', 'two', 'three');
var_dump( in_array('four', $arr) ); // false
var_dump( in_array('one', $arr) );  // true
echo "<br>";

$arr = array('one', 'two', 'three');
$s = implode(', ', $arr);
echo $s; // one, two, three
echo "<br>";



