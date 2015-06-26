<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 1 - Подреждане на числа в нарастващ ред</title>
</head>
<body>

	<?php

	$var = array(5, 4);
		echo 'Unordered array<br />';
		print_r($var);
		echo '<br />Ordered array<br />';
	sort($var);
		print_r($var);

	?>

</body>
</html>