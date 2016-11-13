<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 3</title>
</head>
<body>
    <form action="" method="post">
        <input type="number" name="word_length"/>
        <br>
        <input type="submit"/>
    </form>
</body>
</html>
<?php
    if (empty($_POST["word_length"])){
        exit;
    }

    $maxLength = intval($_POST["word_length"]); // завжди додавати перевірку intval'ом, якщо заходить число
    $file = '3_l.txt';

    $words = filterWordsFromFile($file, $maxLength);
    print_r($words);

    saveIntoFile($file, $words);
    $words = filterWordsFromFile($file, $maxLength);
    print_r($words);

    function filterWordsFromFile($filename, $wordMaxLength){
        $handler = fopen($filename, 'r');
        $words = [];
        while (($line = fgets($handler)) !== false){ // fgets читає файл по рядках. має другий аргумент - довжина в байтах. можна вказувати, можна не вказувати
            $words[] = $line;
        }
        fclose($handler);
        $words = array_filter(
            $words,
            function($item) use ($wordMaxLength){
                $item = trim($item, "\n"); // видалити переведення рядку
                var_dump($item);
                var_dump(mb_strlen($item));
                return mb_strlen($item) <= $wordMaxLength; // оскільки кириличний символ займає 2 байти, треба використовувати mb_strlen, а не strlen
            }
        );

        return $words;
    }

    function saveIntoFile($filename, array $lines){
        //$handler = fopen($filename, 'w');
        $data = implode("\n", $lines);
        file_put_contents($filename, $data); //альтернатива fopen, останній аргумент FILE_APEND дозволяє дописувати, а переписувати

    }
?>
</body>
</html>
