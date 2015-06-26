<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />

	<title>Задача 2 - Подреждане на числа в нарастващ ред</title>
</head>
<body>

	<?php

		$var = array(1, 10, 5);
			echo 'Unordered array<br />';
			print_r($var);
		sort($var);
			echo '<br />Ordered array<br />';
			print_r($var);

	?>

</body>
</html>