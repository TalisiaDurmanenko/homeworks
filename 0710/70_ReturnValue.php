<?php
/*
Реализовать функцию, которая определяет, будет ли число простым числом
 */

// Справдзання, чи є залишок при діленні: $boolResult = true, якщо нема, і false, якщо є.
function module($x) {
    $j = 2;
    $boolResult = ($x % $j == 0);
    return $boolResult;
}

//
function is_prime_integer($x) {
    for ($j = 2; $j < sqrt($x); $j++) {
        if(module($x)){
            echo "{$x} is a NOT prime integer";
            break;
        }
        else
            echo "{$x} is a prime integer";
        break;
    }
}

$a = 266663;
is_prime_integer($a);
