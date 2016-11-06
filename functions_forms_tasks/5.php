<?php
//Написать функцию, которая выводит список файлов в заданной директории, которые содержат искомое слово.  Директория и искомое слово задаются как параметры функции.

function filelist($dir, $word){
    $files = scandir($dir); // повертає масив з імен файлів, які знаходяться в директорії $dir
    echo "Спикок файлів, в яких є слово слово \"{$word}\":<br> ";
    foreach ($files as $file){
        $search = file_get_contents($file); // надає доступ до змісту файлу
        if (strpos($search, $word)){ // шукає слово $word
            echo "$file<br>";
        }
    }
}

/*
все працює, але отак:

Warning: file_get_contents(.): failed to open stream: Permission denied in C:\xampp\htdocs\homeworks\functions_forms_tasks\5.php on line 9

Warning: file_get_contents(..): failed to open stream: Permission denied in C:\xampp\htdocs\homeworks\functions_forms_tasks\5.php on line 9

що це?
*/