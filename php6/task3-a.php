<?php

$ar = array(array());

$number = 5;
echo '<table border="1">';
for ($i=0; $i < 3 ; $i++) { 
	echo '<tr>';
	for ($j=0; $j < 4 ; $j++) { 

		$ar[$i][$j] = $number ++;

		echo '<td>' . $ar[$i][$j] . '</td>';


	}

	echo '</tr>';

}