<?php
$start = 5;
$end = 15;

$sum = 0;

$sum_even = 0; // четно

$sum_odd = 0; // нечетно

$ar = array();

for ($i=1; $i <= 10 ; $i++) { 
	
	$ar[$i] = rand($start, $end);

}

foreach ($ar as $key => $value) {
		
		echo '[$key] ' . $key . ' = [$value] ' . $value . '<br />';
		$sum = $sum + $value;

		if ($value%2 == 0) {
			
			$sum_even = $sum_even + $value;

		}else{

			$sum_odd = $sum_odd + $value;

		}

	}
	echo '<hr />';
	echo "Sum of the numbers = $sum <br />";
	echo "Sum of the even numbers = $sum_even <br />";
	echo "Sum of the odd numbers = $sum_odd <br />";
	echo '<br />';

	if ($sum_even > $sum_odd) {
		
		echo "The sum of even`s numbers is bigger $sum_even";

	}else{

		echo "The sum of odd`s numbers is bigger $sum_odd";

	}
