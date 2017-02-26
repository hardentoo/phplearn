<?php
	$apples = 5;    // Создаем переменную $apples 
	$fruit = "apples";    /* Создаем переменную $fruit, которая содержит имя переменной $apples */ 
	
	// Сейчас мы можем вывести $apples, как $$fruit
	
	echo "Число яблок - ", $$fruit;
?>