<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <pre>



<?php
// якщо не вказати аргументи в дужках, їх можна вказати при виклику функції
function firstFunction() {
    echo 'You called ' . __FUNCTION__ . ' function.' . PHP_EOL;
    /*константа __FUNCTION__ змінює своє значення в залежності від контексту.
    Такі константи починаються з __. Тут буде string(0) ""*/
}
firstFunction(1, 2, 3, 4);
var_dump(__FUNCTION__); // Тут константа __FUNCTION__ відображається як string(0) ""



// анонімна функція - в змінній:
$firstFunction = function () {
    echo 'You called ' . __FUNCTION__ . ' function.' . PHP_EOL;
};
$firstFunction(); // You called {closure} function. {closure} - тому що функція анонімна і не має імені.


// Можна викликати функції шляхом присвоєння їхніх імен змінним:
function secondFunction(){
    echo 'You called ' . __FUNCTION__ . ' function.' . PHP_EOL;
};
$functionName = 'secondfunction'; // функції в php регістронезалежні: secondFunction і 'secondfunction'
$functionName(); //You called secondFunction function.

// приклади функції:
function makeDrink($drink) {
    echo "Your {$drink} is ready" . PHP_EOL;
}
makeDrink('coffee'); // Your coffee is ready

/*apple - значення за замовчанням, можна додавати інше при виклику функції.
Аргументи, які мають значення за замовчанням, мусять бути в кінці*/
function makeDrinks($drink, $flavour = 'apple') { //apple - значення за замовчанням, можна додавати інший при виклику функції
    echo "Your {$drink} with {$flavour} is ready" . PHP_EOL;
}
makeDrinks('soda', 'orange'); // Your soda with orange is ready
echo "<br>";

// для передачі декількох значень використовується масив:
function makeDrinking(array $drinks, $flavour = 'apple') {

    $drink = implode(', ', $drinks); //implode дозволяє склеїти масив в один рядок. ', ' - символ для склеювання
    echo "Your {$drink} with {$flavour} is ready" . PHP_EOL;
    var_dump(explode(', ', $drink)); // Зворотня фунція для implode - explode
}
//makeDrinking('soda') - споводує помилку, бо потрібен масив
makeDrinking(['soda', 'late']);//Your soda with apple is ready
makeDrinking((array) 'soda'); //Your soda with apple is ready - створено масив з одним елементом


// якшо в кінці необхіно отримати масив, можна створити масив примусово:
function makeDrinkings ($drinkings, $flavour = 'apple') {
    $drinkings = (array) $drinkings;
    $drink = implode(', ', $drinkings); //implode дозволяє склеїти масив в один рядок. ', ' - символ для склеювання
    echo "Your {$drink} with {$flavour} is ready" . PHP_EOL;

}
makeDrinkings('soda'); //Your soda with apple is ready


/* Можна використовувати уточнення типу аргументу (function makeDrinkings (string $drinkings, $flavour = 'apple')),
але це буде діяти тільки в сьомому пхп.*/




?>
    </pre>
</body>
</html>