<?php

//Выведите столбец четных чисел в промежутке от нуля до 100.

$i = 1;

while($i <= 100) {
    //if (!($i % 2)) {
    /*Після додавання цієї умови виникає помилка
     Fatal error: Maximum execution time of 30 seconds exceeded in C:\xampp\htdocs\homeworks\arrays_loops_tasks\11.php on line 8*/
    echo $i . "<br>";
    $i++;
 //   }
};

echo "<br>";

for ($i = 0; $i <= 100; $i++){
    if(!($i % 2)) {
        echo $i . "<br>";
    }
}