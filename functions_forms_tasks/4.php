<?php

/*Написать функцию, которая выводит список файлов в заданной директории. Директория задается как параметр функции.*/

function getFiles($x){
    $files = scandir($x);
    echo "Список файлів в заданій директорії: ";
    foreach($files as $file){
        echo "{$file}, ";
    }
}
$dir = 'C:\xampp\htdocs\homeworks\0710';
getFiles($dir);




