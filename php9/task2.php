<?php

/*

	Задача 1 - Домашно: Бази данни - заявки.
	б. Да се извлечат всички раси, които са от тип дърво и има коефициент за слънце над 50.

*/
	require_once('connect.php');

$query = "SELECT * FROM races WHERE type = 'tree' AND sun_coef > 50";

$q = mysqli_query($connect, $query) or die (mysqli_error());

if (mysqli_num_rows($q) > 0) {
	
	while ($r = mysqli_fetch_assoc($q)) {
		
		echo "$r[race] - $r[type] - $r[sun_coef]<br />";

	}

}