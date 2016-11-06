<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<?php

/*Создать гостевую книгу, где любой человек может оставить комментарий в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.*/


if (!($_POST)){
    echo "Ще нема коментарів";
    $file = fopen('comments.txt', 'a+'); // створення файлу для зберігання коментарів

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