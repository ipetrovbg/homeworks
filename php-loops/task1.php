<?php

$masiv = array('element1' => 5, 'element2' => 10, 'element3' => 1, 'element4' => 4, 'element5' => 8, 'element6' => 9);

$max = $masiv['element1'];
$max_key = 'element1';

$second_max = $masiv['element1'];
$second_max_key = 'element1';

foreach ($masiv as $key => $value) {

	if ($max < $value) {
		
		$max = $value;
		$max_key = $key;		

	}	

}




foreach ($masiv as $key => $value) {

	if($value < $max && $value > $second_max){

		$second_max = $value;
		$second_max_key = $key;		
	}

	echo $value . '<br />';

}
echo '<hr />';
echo 'second max - ' . $second_max . '<br />';
echo 'max - ' . $max . '<br />';