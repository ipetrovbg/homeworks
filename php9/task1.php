<?php

/*

	Задача 1 - Домашно: Бази данни - заявки.
	а.

*/

require_once('connect.php');

$query = "SELECT * FROM races WHERE type = 'tree'";

$q = mysqli_query($connect, $query) or die (mysqli_error());

if (mysqli_num_rows($q) > 0) {
	
	while ($row = mysqli_fetch_assoc($q)) {
		
		echo "$row[race] - $row[type]<br />";

	}

}