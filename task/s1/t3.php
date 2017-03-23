<?php

//Даны три числа. Найдите их среднее арифметическое.

//Источник: http://www.itmathrepetitor.ru/zadachi-po-php-vychisleniya/

$a = random_int(0, 255);
$b = random_int(0, 255);
$c = random_int(0, 255);

echo ($a + $b + $c) / 3;

?>