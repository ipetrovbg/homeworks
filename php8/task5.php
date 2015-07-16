<?php
/*

	Зад.4

	Даден е двумерен масив с размери $M x $N с произволни числа. Да се извика метод, който отпечатва 

	индексите на масива и тяхната стойност

*/

// начало на създаване не функцията 

	function print_multi_array($var){
		echo '<table border="1">';
		foreach ($var as $key => $value) {
			echo '<tr>';
			foreach ($value as $k => $v) {
				echo '<td>[' . $key . '][' . $k . '] = ' . $v. '</td>';
			}
			echo '</tr>';

		}

		echo '</table>';
	}
// край на функцията
	
	$arr = array(array()); 

// генерирам си двумерен масив с произволни стойности

	for ($i=0; $i < 2; $i++) { 
		
		for ($j=0; $j < 3; $j++) { 
			
			$arr[$i][$j] = rand(1, 20);

		}

	}

	print_multi_array($arr);