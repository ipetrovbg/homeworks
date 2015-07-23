<?php
/*

	Задача 1 - Домашно: Бази данни - заявки.
	e. Тъй като е много слънчево напоследък всички раси със слънчев коефициент над 60 са увеличили
	   популацията си с 5%.

*/
require_once('connect.php');

// първи селект за да се види как е преди промяната

$select = "SELECT * FROM races WHERE sun_coef > 60";

$check = mysqli_query($connect, $select);

if (mysqli_num_rows($check) > 0) {
	
	while ($r = mysqli_fetch_assoc($check)) {
		
		echo "$r[race] - $r[population] - $r[sun_coef]<br />";
	}
}
echo '<hr />';
$query = "UPDATE races SET population = population + (population*0.05) WHERE sun_coef > 60";

$q = mysqli_query($connect, $query) or die(mysqli_error());

// втори селект за да се види как се е променило

$select2 = "SELECT * FROM races WHERE sun_coef > 60";

$check2 = mysqli_query($connect, $select2);

if (mysqli_num_rows($check2) > 0) {
	
	while ($r = mysqli_fetch_assoc($check2)) {
		
		echo "$r[race] - $r[population] - $r[sun_coef]<br />";
	}
}