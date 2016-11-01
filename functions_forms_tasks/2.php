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

    function getCommonWords($text)
    {
        $words = explode(" ", $text);// повертає масив зі змісту рядку, розділення пробілами

        foreach($words as $item)
        {
            $lengths[] = mb_strlen($item); // створює новий масив, в якості значень - довжина слів з масиву $words
        }
        echo "ТОП3:";
        echo "<br>";
        for($i = 1; $i <= 3; $i++)
        {
            $max = max($lengths); // знаходить масксимальне значення массиву
            $keyMax = array_search($max, $lengths); // знаходить ключ цього значення в масиві з довжиною слів $lengths
            echo($words[$keyMax]); // виводить значення (слово) з цим ключем з масиву $words
            echo "<br>";
            unset($lengths[$keyMax]); // видаляє максимальне значення з масиву з довжиною слів $lengths

        }
    }

    getCommonWords($text);

    ?>


</body>
</html>