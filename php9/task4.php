<?php

/*

	Задача 1 - Домашно: Бази данни - заявки.
	d. Да се добавят 2 нови раси от тип храст(bush).

*/
require_once('connect.php');
	$query = "INSERT INTO races (`race`, `type`, `superpower`, `water_coef`, `sun_coef`, `population`) VALUES
								('Carica papaya', 'bush', 'sweet', 60, 60, 40000)";
								
	$query1 = "INSERT INTO races (`race`, `type`, `superpower`, `water_coef`, `sun_coef`, `population`) VALUES
	('Prunus', 'bush', 'sweet', 60, 60, 60000)";

	$q = mysqli_query($connect, $query);

	$q1 = mysqli_query($connect, $query1);

