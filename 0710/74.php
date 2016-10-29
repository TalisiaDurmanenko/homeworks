<?php
function test($function, $value)
{
    print_r(func_get_args()); //возвращает массив, который состоит из параметров, переданных в тело функции. Эту функцию следует вызывать в теле функции, аргументы которой необходимо получить
}

test('Hello', 'World'); //  we get Array ( [0] => Hello [1] => World )