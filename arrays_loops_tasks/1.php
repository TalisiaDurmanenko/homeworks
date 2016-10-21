<?php

//Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.

$array = array('html', 'css', 'php', 'js', 'jq');

foreach ($array as $item) {
    echo $item . "<br>";
}
// PHP_EOL замість "<br>" виводить в рядок, а не в стовпчик. Чому?