﻿<!doctype html>
<html>
	<head>
		<title>PHP Learn 006</title>
		<meta charset="UTF=8">

	</head>
	<body>

		<?php 
    		//объявляем функцию
    		function test(){
    		  $a = 2+3;
    		  echo "ответ: {$a}";//вот как еще можно выводить переменные
    		}
    		//вызываем функцию и код внутри нее выполнится
    		test();
    	
    		echo "<br>";
    		
    		//объявляем функцию
			function myFoo($arg1,$arg2){
				$a = $arg1+$arg2;
				//в таком случае функция будет возвращать значение $a
				return $a;
			}

			//вызываем функцию и код внутри нее выполнится
			$sum = myFoo(10,15);
			
			echo $sum;
			
			echo "<br>";
			
			//используем повторно
			$sum2 = myFoo(16,25);
			
			echo $sum2;
			
			echo "<br>";
			
			//можно даже так
			$sum3 = myFoo(30,12) + myFoo(33,66);
			
			echo $sum3;

    	?>

	</body>
</html>