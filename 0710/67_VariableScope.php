<?php

function test($x)
{
    $x++;
    $var = 4323;
    echo $x . '<br>';
    echo $var . '<br>';
    echo $b . '<br>';
}

$a = 256;
$b = 100;
test($a); // we got 257, 4323 and notice: $b is undefined
echo $a; // we got 256
echo $var; // notice:  undefined variable

function test1($x)
{
    global $b; // now we see $b!
    $x++;
    $var = 4323;
    echo $x . '<br>';
    echo $var . '<br>';
    echo $b . '<br>';
}

$a = 256;
$b = 100;
test1($a); // we got 257, 4323 and 100
echo $a; // we got 256
echo $var; // notice:  undefined variable