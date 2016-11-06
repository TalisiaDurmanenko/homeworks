<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="10.php" method="post">
    <textarea type="text" name="text">Введіть текст</textarea>
    <input type="submit"/><br>
</form>
<?php
/*Написать функцию, которая считает количество уникальных слов в тексте.
 Слова разделяются пробелами. Текст должен вводиться с формы.*/
function Unique($x)
{
    $words = mb_strtolower($x); // приводить до нижнього регістру
    $words = str_replace(",", "", $x); // очищає текст від розділових знаків. Як очистити від "\"?
    $words = str_replace(".", "", $words);
    $words = str_replace("- ", "", $words);
    $words = str_replace(";", "", $words);
    $words = str_replace(":", "", $words);
    $words = str_replace("?", "", $words);
    $words = str_replace("!", "", $words);
    $words = str_replace("/", "", $words);
    $wordsAr = explode(" ", $words); // повертає масив, значення якого становлять слова тексту
    echo "Кількість унікальних слов: <br>";
    // якщо слово зустрічається декілька разів, його можна рахувати як унікальне один раз? бо ця фунція вважає саме так.
    echo(count(array_unique($wordsAr))); // підраховує кількість значень в масиві, в якому залишилися тільки унікальні значення.
}

$text = $_POST;
Unique($text);
?>
</body>
</html>