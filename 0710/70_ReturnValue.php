<?php
/*
Реализовать функцию, которая определяет, будет ли число простым числом
 */

// Де тут передача значення?


function is_prime_integer($x)
{
    $flag = true;
    for ($j = 2; $j < $x; $j++) {
        if ($x % $j == 0) {
            $flag = false;
            echo "{$x} is NOT a prime integer";
            break;
        }
    }
    if ($flag) {
        echo "{$x} is a prime integer";
    }
}

$a = 25;
is_prime_integer($a);