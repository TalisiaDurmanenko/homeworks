<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="1.php" method="post">
    <textarea type="text" name="colors_1">Введіть кольори через пробіл</textarea><br>
    <textarea type="text" name="colors_2">Введіть кольори через пробіл</textarea><br>
    <input type="submit"/><br>
</form>
    <?php

    /*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
    которые есть и в первом и во втором поле ввода.
    Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
    которая будет возвращать массив с общими словами.*/

    $colors = $_POST;
    function getCommonWords($colors)
    {
        $a = $colors["colors_1"];// розбиває масив на змінні  a, b
        $b = $colors["colors_2"];

        $array_1 = explode(" ", $a);// повертає масив зі змісту рядку, розділення пробілами
        $array_2 = explode(" ", $b);

        $arrays = array_intersect($array_1, $array_2);// зводить два масивів в один, залишаються тільки спільні значення

        $result = implode(", ", $arrays); // об'єднує елементи масиву в рядок, розділює комами

        echo "Збігаються наступні кольори: {$result}";

    }

    getCommonWords($colors);

    ?>


</body>
</html>