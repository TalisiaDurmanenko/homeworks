<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="1.php" method="post">
    Enter username <input type="text" name="username"><br>
    Enter usernick <input type="text" name="nick"><br>
    <input type="submit"/><br>
</form>
    <?php
    $ab = $_POST;
    /*Создать форму с двумя элементами textarea. При отправке формы скрипт должен выдавать только те слова,
    которые есть и в первом и во втором поле ввода.
    Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
    которая будет возвращать массив с общими словами.*/

    function getCommonWords($ab)
    {
        $a = $_POST["username"];
        $b = $_POST["nick"];
        print_r($ab);
        echo $a;
        echo $b;

    }

    getCommonWords($ab);
        //print_r($ser);
        //echo '<br>';
        //$unser = unserialize($ser);
        //print_r($unser);



    ?>


</body>
</html>