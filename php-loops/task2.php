
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Задача 2 php-loops</title>
</head>
<body>
	<?php
	if ($_GET) {
		
		$x = $_GET['x'];
		$y = $_GET['y'];

		if ($x < $y) {
			
			while ($x < $y) {
				$x++;

				if ($x%3 == 0) {
					
					echo $x . '<br />';

				}
			}

		}elseif ($x > $y) {

			while ($y < $x) {
				
				$y++;
				if($y%3 == 0){

					echo $y . '<br />';

				}

			}

		}

	}
		
	?>
	<form method="get" action="">
		Въведете число Х: <input type="numberx" name="x" /><br />
		Въведете число У: <input type="numbery" name="y" /><br />
		<input type="submit" name="submit" value="Търси" />
	</form>
</body>
</html>