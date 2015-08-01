<?php
function f($text) {

$count = strlen($text);
$half = round($count/2);


	$first_text = substr($text, 0, $half);
	echo $first_text . '<hr />';
	$first_text = str_replace('a', '<b>u</b>', $first_text);
	$first_text = str_replace('t', '<b>v</b>', $first_text);
	echo "a - u";
	echo "t - v<br />";

	echo $first_text;
	
	echo '<hr />';

	$second_text = substr($text, $half, $count);
	echo $second_text . '<hr />';
	$second_text = str_replace('e', '<b>o</b>', $second_text);
	$second_text = str_replace('s', '<b>p</b>', $second_text);

	echo "e-o s-p<br />";
	echo $second_text;
	

}