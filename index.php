<?php
//$array = array_fill(0, 5, 3);
//print_r($array);
$array = range(1,5);
//($array);

class A {
    public function sqr($a)
    {
        return $a * $a;
    }
}
$ab = new A;
$arr2 = array_map('A::sqr', $array);
//var_dump($arr2);
//array_walk
array_walk ($array, function(&$item) {
    $item = $item * $item;
});
//var_dump($array);

//array_reduce
function sum($buffer, $item){
    $buffer += $item;
    return $buffer;
}
//var_dump(array_reduce($array, 'sum')); //int(55): 0 + 1 > 1 + 4 > 4 + 9 >>>> 55

//array_filter
$arr3 = range(1, 10);
$arr3[] = [];
var_dump($arr3);
$even = array_filter($arr3, function($item){
    return empty($item % 2); //коли тут false, елемент видаляється з масиву
});
var_dump($even);

