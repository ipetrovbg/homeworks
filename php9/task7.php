<?php
/*
	Задача 1 - Домашно: Бази данни - заявки.

	g. Магийте за пълни аматьори са забранени в Длопия. Да се „изтрият” всички магии, които изискват опит
	под 35. (да им се зададе date_deleted – днешна дата)

*/
	require_once('connect.php');
$date = date('Y-m-d');
$delete_query = "UPDATE magics SET date_deleted = '$date' WHERE required_experience <= 35";

$query = mysqli_query($connect, $delete_query)or die(mysqli_error());

$select_query = "SELECT * FROM magics WHERE date_deleted IS NULL";

$select = mysqli_query($connect, $select_query) or die(mysqli_error());

if (mysqli_num_rows($select) > 0) {
	
	while ($r = mysqli_fetch_assoc($select)) {
		echo "$r[magic] - $r[required_experience]<br />";
	}

}