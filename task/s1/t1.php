<?php

// Даны два числа. Найти их сумму и произведение.

// Источник: http://www.itmathrepetitor.ru/zadachi-po-php-vychisleniya/

$a = random_int(0, 255);
$b = random_int(0, 255);

echo $a, " + ", $b, " = ", $a + $b, "\n";
echo $a, " * ", $b, " = ", $a * $b;

?>
