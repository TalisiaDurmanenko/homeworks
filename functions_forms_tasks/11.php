<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="11.php" method="post">
    <textarea type="text" name="text">Введіть текст</textarea>
    <input type="submit"/>
</form>
<?php
/* Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.*/
function upper($x){
    $wordsAr = explode(". ", $x); // повертає масив, значення якого становлять речення тексту

    foreach($wordsAr as $sentence){
        mb_internal_encoding("UTF-8"); // не знаю, що це але без цього з кирилецею не працює
        //$Sentence = ucfirst($sentence); // чомусь не працює з кириличним текстом
        $litera = mb_strtoupper(mb_substr($sentence, 0, 1)); // робить великою першу літеру
        $sentence = $litera . mb_substr($sentence, 1, mb_strlen($sentence)); // з'єднує велику першу літеру з рештою тексту, з якого вилучена ця перша літера.
        $WordsAr[] = $sentence; // додає нове речення з великою літерою останнім елементом масиву
    }

    $words = implode(". ", $WordsAr); // повертає рядок зі значень масиву, розділяючи їх крапкою і пробілом
    echo($words);
}
/*звертаєтсья до єдиного елементу масиву, оскільки для роботи функції аргумент має бути рядком.
можна залишити аргумент масивом і звертатися до його елементу в функції, не знаю, як краще.*/

$text = $_POST[0];
upper($text);
?>

</body>
</html>