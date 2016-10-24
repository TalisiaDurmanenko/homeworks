<?php
/*Вам нужно разработать программу, которая считала бы количество вхождений
какой­нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе
442158755745 встречается 4 раза.*/

$a = "425553555532553"; //число
$x = 5; // вьібранная цифра
$j = 0; // количество вхождений

for($i = 0; $i <= strlen($a); $i++) { // strlen() повертає довжину рядка

    $array = array($a[$i]); // Notice: Uninitialized string offset: 15 in C:\xampp\htdocs\homeworks\arrays_loops_tasks\24.php on line 12
    foreach($array as $number){
        if ($number == $x) {
            $j = $j + 1;
        }
        else
            continue;
    }
}

echo "Цифра \"{$x}\" в числі {$a} зустрічається {$j} раз";
