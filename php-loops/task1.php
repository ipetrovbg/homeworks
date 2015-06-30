<?php

$masiv = array('element1' => 500, 'element2' => 10, 'element3' => 100, 'element4' => 4, 'element5' => 8, 'element6' => 900);

$max = $masiv['element1'];
$max_key = 'element1';

$second_max = $masiv['element1'];
$second_max_key = 'element1';

$min = $masiv['element1'];
$min_key = 'element1';

foreach ($masiv as $key => $value) {

	if ($max < $value) {
		
		$max = $value;
		$max_key = $key;		

	}elseif ($value < $min) {
		$min = $value;
		$min_key = $key;
	}	

	echo '$value - ' . $value . '<br />';

}

unset($masiv[$max_key]);

$second_max = $min;
$second_max_key = $min_key;

foreach ($masiv as $key => $value) {

	if($value > $second_max){

		$second_max = $value;
		$second_max_key = $key;		
	}

}

echo '<hr />';
echo 'second max - ' . $second_max_key . ' - ' . $second_max . '<br />';
echo 'max - ' . $max_key . ' - ' . $max . '<br />';