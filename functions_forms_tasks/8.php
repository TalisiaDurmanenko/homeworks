<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="8.php" method="post">
    <textarea type="text" name="text">Введіть текст</textarea>
    <input type="submit" value="Перевернути"/>
</form>
<?php
//Написать функцию, которая переворачивает строку. Было "abcde", должна выдать "edcba". Ввод текста реализовать с помощью формы

$string = $_POST;
print_r($string);

?>
</body>
</html>
