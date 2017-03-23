<?php
		
		// https://py.checkio.org/mission/roman-numerals/

		$n = 3999;
		
		$i = $n / 1000;
		
		$i = Floor($i);
		
		$str = '';
		
		$str = $str . str_repeat('M', $i);

		$n = $n % 1000;



		$i = $n / 500;
		
		$i = Floor($i);
		
		$str = $str . str_repeat('D', $i);
		
		$n = $n % 500;
		


		$i = $n / 100;
		
		$i = Floor($i);
		
		$str = $str . str_repeat('C', $i);
		
		$n = $n % 100;



		$i = $n / 50;
		
		$i = Floor($i);
		
		$str = $str . str_repeat('L', $i);
		
		$n = $n % 50;
		


		$i = $n / 10;
		
		$i = Floor($i);
				
		$str = $str . str_repeat('X', $i);
		
		$n = $n % 10;
		
		
		$m = ['','I', 'II', 'III', 'IV', 'V', 'VI', 'VII', 'VIII', 'IX'];
		
		$str = $str . $m [$n];
		
		
		$str = str_replace("CCCC", "CD", $str);
		
		$str = str_replace('DCD','CM', $str);
		
		$str = str_replace('XXXX','XL', $str);
		
		$str = str_replace('LXL','XC', $str);
		
		echo $str;

?>
