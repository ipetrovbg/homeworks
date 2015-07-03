<?php
echo '<table border="1">';

	for ($i=1; $i <= 10; $i++) {

		echo '<tr>';

			$sum = 1 * $i;

			for ($j=1; $j <= $i; $j++) { 

				
				$new = $i*$j;

				echo '<td>';

				echo "$j * $i = $new";

				echo "</td>";

			}

			if ($i != 10) {

				echo '<td colspan="10"></td>';
			}

		echo "</tr>";

	}
echo '</table>';