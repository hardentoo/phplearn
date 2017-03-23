<?php
		
		// https://py.checkio.org/mission/non-unique-elements/

		$m = [1,2,3,4,5,1,2,3,4,5,7,8,9];

		$len = count($m);

		function is_uniq($array, $n){
				$len = count($array);
				for ($i=0; $i < $len; $i++) { 
					if ($array[$i] === $array[$n] && $i != $n)
						return False;
				}
				return True;
		}

		$res = [];

		for ($i = 0; $i < $len; $i++) {

			if ( !is_uniq($m,$i)) {
				array_push($res, $m[$i]);
			 }

		}

		for ($i = 0; $i < count($res); $i++) { 
			echo "$res[$i] ";
		}

?>
