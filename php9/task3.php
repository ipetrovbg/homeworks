<?php

/*

	Задача 1 - Домашно: Бази данни - заявки.
	с. Да се извлечат всички магии, които съдържат ‘ur’ или ‘os’ в своето име (magic).

*/

	require_once('connect.php');

	$query = "SELECT * FROM magics WHERE magic LIKE '%ur%' OR magic LIKE '%os%'";

	$q = mysqli_query($connect, $query) or die(mysqli_error());

	if (mysqli_num_rows($q) > 0) {
		
		while ($r = mysqli_fetch_assoc($q)) {
			
			echo "$r[magic]<br />";

		}

	}