<?php
//Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.

$dir = 'C:\xampp\htdocs\homeworks\functions_forms_tasks';
$files = scandir($dir);
print_r($files);
echo "Спикок файлів, в яких є слово слово \"файл\":<br> ";
foreach ($files as $file){
    if (strpos(file_get_contents($file), "файл"));
    {
        echo "$file<br>";
    }
}
/*$a = '3.php';
$f = file_get_contents($a);
if (strpos($f, "файл")){
    echo $a;
}