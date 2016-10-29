<?php
function test($function, $value)
{
    echo $function($value);
}

// calling test with callback and 256 parameters
test(
    function($a) {
        $a++;
        return $a;
    },  256);