<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Задача 4 - Проверка за просто число</title>
</head>
<body>
	<?php

		if ($_GET) {
			
			$n = $_GET['number'];

			$var = 0;
		

		for ($i=1; $i <= $n; $i++) { 

			
				
				if ($n % $i == 0) {
					
					$var++;
					echo $i . '<br />';
					
				}
				
				
		}

			echo "<hr />";	
			if ($var > 2) {

					echo "<b>$n не е просто число</b>";

			}
			else{

				if ($n == 0) {

					echo "<b>$n не е просто число</b>";

				}elseif($n == 1){
					echo "<b>$n не е нито просто нито съставно число</b>";
					
				}elseif($n == 2){
					echo "<b>$n е просто число</b>";
				}else{
					echo "<b>$n е просто число</b>";
					
			}
				}

		echo '<br /><b>Има ' . $var . ' делителя</b>';


		}

	?>

	<form method="get" action="">
		
		Number: <input type="number" name="number" /><br />
		<input type="submit" name="submit" value="Проверка" />

	</form>

</body>
</html>