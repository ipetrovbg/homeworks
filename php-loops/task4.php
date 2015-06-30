<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Задача 4 - Проверка за просто число</title>
</head>
<body>
	<?php

		if ($_GET) {
			
			$var = $_GET['number'];

			if ($var == 1) {
				
				echo "$var не е просто число!<br /> Следващото просто число е 2";

			}elseif ($var == 0) {
				
				echo "$var не е просто число!<br /> Следващото просто число е 2";

			}elseif($var == 2){

				echo "$var е просто число!";

			}else{

				if($var%2 == 0){

					echo "$var не е просто число";

				}else{

					echo "$var е просто число";

				}

			}

		}

	?>

	<form method="get" action="">
		
		Number: <input type="number" name="number" /><br />
		<input type="submit" name="submit" value="Проверка" />

	</form>

</body>
</html>