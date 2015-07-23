<?php
/*
	Задача 1 - Домашно: Бази данни - заявки.

	h. Да се извлечат всички активни магии.

*/
	require_once('connect.php');

	$select = "SELECT * FROM magics WHERE date_deleted IS NULL";

	$select_query = mysqli_query($connect, $select) or die(mysqli_error());

	if (mysqli_num_rows($select_query) > 0) {
		
		while ($r = mysqli_fetch_assoc($select_query)) {
			
			echo $r['magic'] . '<br />';

		}

	}