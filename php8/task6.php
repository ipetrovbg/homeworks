<?php

/*

	Зад.5*

	Да се напише метод, който сумира 2 масива в трети масив ($c[$i] = $a[$i] + $b[$i]). Двата масива може да са с 

	различен размер.

*/
	function array_comb($a, $b){

		$c = array();

		$a_count = count($a);
		$b_count = count($b);

		if ($a_count > $b_count) {
			
			for ($i=0; $i < $a_count; $i++) { 
				

				if ($b[$i] == '') {
					
					$b[$i] = 0;

				}

				$c[$i] = $a[$i] + $b[$i];

			}


		}else{

			for ($i=0; $i < $b_count; $i++) { 
				

				if ($a[$i] == '') {
					
					$a[$i] = 0;

				}

				$c[$i] = $b[$i] + $a[$i];

			}

		}

		foreach ($c as $key => $value) {
			
			echo '[' . $key . '-' . $value . ']';

		}

	}

	$arr1 = array(5, 8, 16);
	$arr2 = array(4, 3, 1, 15, 5);

array_comb($arr1, $arr2);