<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 4 - Положителен или отрицателен сбор</title>
</head>
<body>

	<?php

	if(!empty($_GET['sub'])){

		$a = $_GET['number1'];

		$b = $_GET['number2'];

		$c = $a + $b;

		// първо решение
		if ($c > 0) {

			echo '<br />ПЪРВО РЕШЕНИЕ:<br />';

			echo $c . ' е положително число<br />';

		}elseif($c < 0){

			echo '<br />ПЪРВО РЕШЕНИЕ:<br />';

			echo $c . ' е отрицателно число<br />';

		}else{

			echo '<br />ПЪРВО РЕШЕНИЕ:<br />';

			echo 'Сумата е нулева<br />';

		}


		// второ решение
		$d = $c * -1;

		if($d > 0){

			echo '<br />ВТОРО РЕШЕНИЕ:<br />';

			echo $c . ' е отрицателно число<br />';

		}else{

			echo '<br />ВТОРО РЕШЕНИЕ:<br />';

			echo $c . ' е положително число<br />';

		}

		// трето решение / на Влади /
		if ($a > -$b) {

			echo '<br />ТРЕТО РЕШЕНИЕ:<br />';

			echo "<br />Сумата е положителна<br />";

		} elseif($a < -$b) {

			echo '<br />ТРЕТО РЕШЕНИЕ:<br />';

			echo "<br />Сумата е отрицателна<br />";

		} else {

			echo '<br />ПЪРВО РЕШЕНИЕ:<br />';

			echo "<br />Сумата е нулева<br />";

		}

	}
?>
	<br />
	<form method="get" action="" />
		
		Въведете число: <input type="numeric" name="number1" value="" /><br />

		Въведете число: <input type="numeric" name="number2" value="" /><br />

		<input type="submit" name="sub" value="Пресмятане" />

	</form>

</body>
</html>