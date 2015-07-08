<?php

$arr = array(array());




$sum = 0;

for ($i=0; $i <= 4 ; $i++) { 

	for ($j=0; $j <= 5; $j++) { 
		
		$arr[$i][$j] = rand(1, 20);

	}
	

}

foreach ($arr as $key => $value) {

	echo $key . ' - - ';

	$min 		= array();
	$min_k 		= array();

		foreach ($value as $k => $v) {
			

			echo $v . ' | ';

			if ($v <= $min) {
				
				$min = $v;
				$min_k = $k;

			}	

		}

	echo ' --- column - ' . $min_k . ' - min value: ' . $min;

	echo '<br />';
	$sum += $min;
}

echo '<br />Total smallest sum: ' . $sum;