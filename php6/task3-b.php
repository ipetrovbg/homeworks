<?php

$ar = array(array());

$number = 1;


echo '<table border="1">';
for ($i=0; $i < 4 ; $i++) { 

	echo '<tr>';

		for ($j=0; $j < 4 ; $j++) { 

			$ar[$i][$j] = $number++;

			echo '<td>' . $ar[$i][$j] . '</td>';

		}
	
	$number = -$number - 3;

	if ($i == 1) {		

		$number = 10;

	}elseif ($i == 2) {		

		$number = -26;
	}
	
	echo '</tr>';

}