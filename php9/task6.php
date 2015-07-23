<?php
/*

	Задача 1 - Домашно: Бази данни - заявки.
	f. По време на горещините мъжките длопи се уголемяват. Да се увеличи теглото на всички длопи от
	   мъжки пол с 5 кг.

*/
	   require_once('connect.php');

$first_select = "SELECT * FROM dlops WHERE gender = 'male'";

$first = mysqli_query($connect, $first_select);

if (mysqli_num_rows($first) > 0) {
	
	while ($r = mysqli_fetch_assoc($first)) {

		echo "$r[first_name] - $r[gender] - $r[weight]<br />";

	}
}

echo '<hr />';

$update = "UPDATE dlops SET weight = weight + 5 WHERE gender = 'male'";

$q_update = mysqli_query($connect, $update);

$second_select = "SELECT * FROM dlops WHERE gender = 'male'";

$second = mysqli_query($connect, $second_select);

if (mysqli_num_rows($second) > 0) {
	
	while ($r = mysqli_fetch_assoc($second)) {
		echo "$r[first_name] - $r[gender] - $r[weight]<br />";
	}

}