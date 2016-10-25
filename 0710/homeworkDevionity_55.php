<?php
/* Создать текстовый файл, в котором будет 10 строк.
В первой строке записать 1, во второй 22, в третьей 33, ..., в десятой - десять десяток*/

$array = [];
$x = null;
for ($i = 1; $i <= 10; $i++)
{
    for ($j = 0; $j < $i; $j++)
    {
        $x .= $i;
    }
    $array[] = $x;
    $x = null;
    $j = 0;
};

$text = fopen('test.txt', 'w');
foreach($array as $output) {
    fwrite($text, $output."\r\n");
}
fclose($text);

$x = fopen('test.txt', 'r');
$read = fread($x, 35); // перші 35 символів файла
echo $read;

$read = file_get_contents('test.txt'); // зміст файла
echo $read;
