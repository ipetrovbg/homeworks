<?php

$ar = array(array());

echo '<table border="1">';

for ($i=1; $i <= 4 ; $i++) { 
	
	echo '<tr>';

		for ($j=1; $j <= $i; $j++) { 
			
			$ar[$j][$i] = $j;

			echo '<td>' . $ar[$j][$i] . '</td>';
			

		}

		for ($k=$i; $k <= 3; $k++) { 
			
			echo "<td>0</td>";

		}

		

	echo '</tr>';
}
echo '</table>';