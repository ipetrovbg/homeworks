<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Задача 2 - php loop for</title>
</head>
<body>
	<?php

		$n = 121;
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

	?>

</body>
</html>
