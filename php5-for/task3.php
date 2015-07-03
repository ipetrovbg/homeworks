<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8>
	<title>Задача 3 - php loop for</title>
</head>
<body>
	<table border="1">
		<?php
			if ($_GET) {
				
				$m = $_GET['x'];

				$n = $_GET['y'];

				echo "<tr>";

				for ($i=1; $i <= $m; $i++) { 
					
					for ($j=1; $j <= $n; $j++) { 
						
						echo "<td>$i, $j</td>";

					}
					echo "</tr>";

				}

			}			

		?>
	</table>
	<hr />
	<form method="get" action="">
		Първо число Х: <input type="number" name="x" /><br />
		Второ число У: <input type="number" name="y" /><br />
		<input type="submit" name="submit" value="Изпрати" />
	</form>
</body>
</html>