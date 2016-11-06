
<?php


/*Написать функцию, которая считает количество уникальных слов в тексте.
 Слова разделяются пробелами. Слов. Текст должен вводиться с формы.*/
$x = "a васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался. а там хоть трава не расти.";
$wordsAr = explode(". ", $x); // повертає масив, значення якого становлять речення тексту

print_r($wordsAr);
echo "34<br>";
/*foreach($wordsAr as $sentence){
    mb_internal_encoding("UTF-8");
    $Sentence = ucfirst($sentence);
    //$sentence = mb_strtoupper(mb_substr($sentence, 0, 1, 'UTF-8'), 'UTF-8');
   //$sentence = mb_substr($sentence, 1, mb_strlen($sentence), 'UTF-8');
    echo "$Sentence<br>";
}*/

for($i=0; $i <= count($wordsAr); $i++){
    mb_internal_encoding("UTF-8");
    $wordsAr[$i] = ucfirst($wordsAr);
    echo $wordsAr[$i];
    echo "<br>";
}
//mb_strtoupper(mb_substr($sentence, 0, 1, 'UTF-8'), 'UTF-8')
//mb_substr(sentence, 1, mb_strlen($sentence), 'UTF-8');
?>

