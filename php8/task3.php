<?php
/*
	Зад.2

	Да се напише метод, който по въведени 2 числа казва дали тяхното произведение е четно или нечетно. Да се 

	извика метода за 3 различни двойки числа

*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Задача 2 - php 8</title>
</head>
<body>
<?php
	
	function even_odd($x, $y){

		$sum = $x*$y;

		if ($sum%2 == 0) {
			
			echo "Произведението ($sum) е четно число!";

		}else{

			echo "Произведението ($sum) е нечетно число!";

		}

	}

	if ($_GET) {
		
		$x = $_GET['x'];
		$y = $_GET['y'];

		even_odd($x, $y);

	}
	
?>
<form method="get" action="">
	Въведи първо число: <input type="number" name="x" /><br />
	Въведи второ число: <input type="number" name="y" /><br />
	<input type="submit" name="submit" value="Намери" />
</form>
</body>
</html>