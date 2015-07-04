<?php
echo '<table border="1">';
$var = 0;
	for ($i=1; $i <= 10; $i++) {

		echo '<tr>';

			$sum = 1 * $i;

			for ($j=1; $j <= $i; $j++) { 

				
				$new = $i*$j;

				echo '<td>';

				echo "$j * $i = $new";
				
				echo "</td>";

				

				$var = 10 - $sum;

				

			}

			if($i != 10){

				echo '<td colspan="' . $var . '"></td>';
			}
			

		echo "</tr>";

	}
echo '</table>';