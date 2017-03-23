<?php

/*

Создайте массив $arr=array('a', 'b', 'c', 'd', 'e'). С помощью одной переменной $var поменяйте местами элементы 'b' и 'c'.

 */

$arr = array('a', 'b', 'c', 'd', 'e');

$var = $arr[2];
$arr[2] = $arr[1];
$arr[1] = $var;

var_dump($arr);

$arr = array('a', 'b', 'c', 'd', 'e');

$var = $arr[3];
$arr[3] = $arr[1];
$arr[1] = $var;

$var = $arr[4];
$arr[4] = $arr[0];
$arr[0] = $var;

var_dump(var_dump($arr));

?>