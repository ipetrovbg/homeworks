<?php

/*

	Зад.3

	Да се напише метод, който по зададен масив отпечатва всички негови елементи и намира и отпечатва сумата 

	на елементите с четен индекс. Да се извика метода 2 пъти за 2 различни масива.

*/

$arr1 = array(1, 5, 6, 4, 7, 12, 20, 8);
$arr2 = array(5, 2, 3, 4, 7, 9, 11, 20);

function arr_print($arr){

$sum = 0;
	echo '<br />';
	echo '<br />';

	foreach ($arr as $key => $value) {
		
		echo '[' . $key . ']<->[' . $value . '] &nbsp;&nbsp;';

		if ($key%2 == 0) {
			
			$sum = $sum + $value;

		}

	}
	echo " - The sum of odd key is $sum<br />";

}

arr_print($arr1);
arr_print($arr2);