<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Задача 3 - Четно - нечетно</title>
</head>
<body>
<?php
	
	if(!empty($_GET['submit'])){

		$var1 = $_GET['number1'];
		$var2 = $_GET['number2'];
		$result = $var1*$var2;

		if ($result%2 == 0) {

			echo 'РЕШЕНИЕ: $result%2 == 0<br />';

			echo '<br /><b>' . $result . '</b> е четно число';			

		}else{

			echo '<br /><b>' . $result . '</b> е нечетно число';
			echo '<br />$result%2 == 0<br />';

		}

		echo "<hr />ВТОРИ ВАРИАНТ:<br />";

		echo 'РЕШЕНИЕ: Ако е integer, значи е цяло число следователно остатъкът от делението е 0. Ако е double значи е нечетно и проверявам стринга с ===';

		$second = $result/2;

		echo '<br />';

		echo '$result/2<br />';		

		if(gettype($second) === 'integer'){

			echo '<br />Произведението е четно число';

		}elseif(gettype($second) === 'double'){

			echo '<br />Произведението е нечетно число';
			
		}

	}
?>
	<br /><hr />

	<form method="get" action="">
		
		Въведете число: <input type="numeric" name="number1" value="" /><br />
		Въведете число: <input type="numeric" name="number2" value="" /><br />
		<input type="submit" name="submit" value="Пресмятане" /><br />

	</form>
</body>
</html>