
<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8" />

	<title>Задача 5 - Точка в окръжност или извън окръжност</title>

</head>
	<body>

	<?php

		if(!empty($_GET['sub'])){

			$centerx = 0;
			$centery = 0;
			$radius = 2;

			$coordinatex = $_GET['x'];
			$coordinatey = $_GET['y'];

			$sqrt = sqrt(($centerx - $coordinatex) * ($centerx - $coordinatex) + ($centery - $coordinatey) * ($centery - $coordinatey));

			if($sqrt < $radius){

				echo 'Координатите са в окръжността';

			}elseif($sqrt == $radius){

				echo 'Координатите са на окръжността';

			}else{

				echo 'Координатите са извън окръжността';
			}

		}	

	?>

		<form method="get" action="">
			
			Въведете координати по х: <input type="numeric" name="x" value="" /><br />
			Въведете координати по y: <input type="numeric" name="y" value="" /><br />
			<input type="submit" name="sub" value="Изчисляване" />

		</form>
	</body>
</html>