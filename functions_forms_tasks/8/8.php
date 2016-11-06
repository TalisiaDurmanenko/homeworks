<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<?php

/*Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов.
При наличии таких слов - выводить сообщение "Некорректный комментарий".
Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;*/

$swearwords = array("курва", "курво"); // масив з забороненими словами
$words = implode(" ", $_POST);// повертає масив зі змісту рядку, розділення пробілами
$words = str_replace(",", "", $words); // очищає текст від розділових знаків. Як очистити від "\"?
$words = str_replace(".", "", $words);
$words = str_replace("- ", "", $words);
$words = str_replace(";", "", $words);
$words = str_replace(":", "", $words);
$words = str_replace("?", "", $words);
$words = str_replace("!", "", $words);
$words = str_replace("/", "", $words);
$words = explode(" ", $words);

if (!($_POST)){
    echo "Ще нема коментарів";
    $file = fopen('comments.txt', 'a+'); // створення файлу для зберігання коментарів

}
elseif(array_intersect($words, $swearwords)) // зводить два масивів в один, залишаються тільки спільні значення
{
    echo "Некоректний коментар";
}
elseif ($_POST){
    $comment = serialize($_POST);
    $file = fopen('comments.txt', 'a');
    fwrite($file, $comment . PHP_EOL);
    fclose($file);
    $comments = file('comments.txt');
    foreach($comments as $key => $item){
        $item = unserialize($item);
        $number = $key + 1;
        echo "Коментар №{$number}: $item[comment]<br>";
    }
}


?>

<form action="7.php" method="post">
    Напишіть коментар <textarea type="text" name="comment"></textarea>
    <input type="submit" value="Надіслати"/>
</form>


</body>
</html>