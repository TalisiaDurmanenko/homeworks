<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="2_l.php" method="post">
    <textarea name="text" cols="30" rows="5"></textarea>
    <br>
    <input type="submit"/>
</form>

    <?php
    $text = '';
    $words = [];

    if (!empty($_POST['text'])) {
        $text = $_POST['text'];
        $words = str_word_count($text, 1); // розбиває рядок на слова, які стають значеннями масиву

        usort($words, 'compareWords'); // сортує масив за допомогою callback функції
        print_r($words = array_slice($words, 0, 3)); // виводить три елементи масиву, починає з нульової позиції
    }

    function compareWords($a, $b) // функція, яка використовується для сортування масиву
    {
        $lengthA = strlen($a);
        $lengthB = strlen($b);
        if ($lengthA == $lengthB){
            return 0;
        }
        return ($lengthA > $lengthB) ? 1 : -1; // сортування буде від меншого до більшого. щоб зробити навпаки, треба написати -1 : 1
    }

    ?>

</body>
</html>