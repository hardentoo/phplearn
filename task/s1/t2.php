<?php

// Даны два числа. Найдите сумму их квадратов.

// Источник: http://www.itmathrepetitor.ru/zadachi-po-php-vychisleniya/

$a = random_int(0, 255);
$b = random_int(0, 255);

echo $a, " * ", $a, " + ", $b, " * ", $b, " = ", $a * $a + $b * $b, "\n";

?>