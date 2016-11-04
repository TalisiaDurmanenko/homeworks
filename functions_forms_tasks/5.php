<?php
//Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.

$dir = 'C:\xampp\htdocs\homeworks\functions_forms_tasks';
$files = scandir($dir);
//unset($files[0]);
//unset($files[1]);
print_r($files);
echo "Спикок файлів, в яких є слово слово \"файл\":<br> ";


foreach ($files as $file){
    $search = file_get_contents($file);
    $needle =  "файл";
    if (strpos($search, $needle)) {
        echo "$file<br>";

    }

}
/*
$a = '3.php';
$f = file_get_contents($a);
if (strpos($f, "фddsf")){
    echo $a;
}*/