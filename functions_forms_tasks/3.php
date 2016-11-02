<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Задачи по функциям и формам</title>
</head>
<body>
<form action="3.php" method="post">
    Введіть максимальну кількість символів <input type="number" name="number"/><br>
    <input type="submit"/><br>
</form>
<?php
/*Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение.*/
// Питання: яка має бути помилка на кирилічних рядках? Як повернути (і чи треба?) розділові знаки?


$text = "Есть текстовый файл. Необходимо удалить из него все слова, длина которых превыщает N символов.
Значение N задавать через форму. Проверить работу на кириллических строках - найти ошибку, найти решение. Nauka co chwila dostarcza dowodów na to, że zwierzęta potrafią komunikować się równie sprawnie jak ludzie. Co więcej, okazuje się, że czworonogi są w stanie przekazać swoje potrzeby nie tylko w obrębie gatunku, ale też bez problemu komunikują się z ludźmi. Wiedzą o tym wszyscy miłośnicy kotów i psów, którzy kiedykolwiek zapomnieli napełnić miski swoich podopiecznych. Jednak naukowcy cały czas prowadzą badania w obrębie sposobu porozumiewania się zwierząt, a ostatnio ich zainteresowanie padło na konie.";

function clean($x){
    $max = $_POST["number"]; // визначає максимальну довжину слова
    echo "Є текст: {$x}";
    echo "<br>";
    echo "<br>";
    echo "Максимальна довжина слова складає {$max} символів";
    echo "<br>";
    echo "<br>";
    $words = str_replace(",", "", $x); // очищає текст від розділових знаків. Як очистити від "\"?
    $words = str_replace(".", "", $words);
    $words = str_replace("- ", "", $words);
    $words = str_replace(";", "", $words);
    $words = str_replace(":", "", $words);
    $words = str_replace("?", "", $words);
    $words = str_replace("!", "", $words);
    $words = str_replace("/", "", $words);
    $wordsAr = explode(" ", $words); // повертає масив, значення якого становлять слова тексту

    foreach($wordsAr as $item){ // повертає масив, значення якого становить довжина слів тексту
        $lengthAr[] = mb_strlen($item);
    }

    foreach($lengthAr as $key => $number){ // видаляє з масиву зі словами ті слова, довжина яких перевищує число символів, введене користувачем
        if($number > $max){
            unset($wordsAr[$key]);
        }
    }
    $newText = implode(" ", $wordsAr);
    echo"Від тексту залишилося: {$newText}";


};

clean($text);


?>
</body>
</html>
