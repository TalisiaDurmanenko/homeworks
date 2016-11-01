<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="2.php" method="post">
    <textarea type="text" name="text">Введіть текст</textarea><br>
    <input type="submit"/><br>
</form>
    <?php

    // Создать форму с элементом textarea. При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте. Реализовать с помощью функции.
    $text = $_POST;
    print_r($text);
    $length = 0;
    function getCommonWords($colors)
    {
        $a = $text["text"];
        $words = explode(" ", $a);// повертає масив зі змісту рядку, розділення пробілами

        foreach($wordsTop as $item)
        {
            $length = mb_strlen($item);
            echo $length;

        }

        $top3 = implode(", ", $wordsTop); // об'єднує елементи масиву в рядок, розділює комами

        echo "ТОП3: {$top3}";

    }

    getCommonWords($text);

    ?>


</body>
</html>