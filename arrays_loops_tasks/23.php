<?php
/*Вам нужно разработать программу, которая считала бы сумму цифр числа введенного
пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1,
2, 3, т. е. 6.*/


$x = "34565";
/*if(is_string($x) !== "true"){
    echo "Mistake";*/
// Як перевірити коректність даних?
}
$sum = 0;

for($i = 0; $i <= strlen($x); $i++) {
    $sum += $x[$i];
}

echo "$x<br>";
echo $sum;
// Notice: Uninitialized string offset: 5 in C:\xampp\htdocs\homeworks\arrays_loops_tasks\23.php on line 14