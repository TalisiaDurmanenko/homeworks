<?php
/*
Реализовать функцию, которая определяет, будет ли число простым числом
 */

// Де тут передача значення?

function module($x) {

    $j = 2;
    $boolResult = ($x % $j == 0);
    return $boolResult;
    echo $boolResult;

}
$f = 2;
module($f);

function is_prime_integer($x) {
    for ($j = 2; $j < $x; $j++) {
        if(module($x)){
        break;
        }
        else
            echo "{$x} is a prime integer";
        break;
    }
}

$a = 25;
is_prime_integer($a);
