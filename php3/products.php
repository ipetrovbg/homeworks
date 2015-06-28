<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 3 - php html forms - Продукти</title>
</head>
<body>
	<?php
	session_start();

	echo 'Здравей, ' . $_SESSION['user'] . '!<br />';
	echo 'IBAN №: ' . $_SESSION['cart_number'] . '<br />';
	echo 'Налична сума: ' . $_SESSION['cart_maney'] . 'лв.<hr />';
		
	?>
	<form method="get" action="check.php">

	Дънки: 50лв. <input type="checkbox" name="product[]" value="Дънки_50" /><br />
	Компютър: 1000лв. <input type="checkbox" name="product[]" value="Компютър_1000" /><br />
	Очила: 20лв. <input type="checkbox" name="product[]" value="Очила_20" /><br />
	Топка: 10лв. <input type="checkbox" name="product[]" value="Топка_10" /><br />
	Кърпа: 50лв. <input type="checkbox" name="product[]" value="Кърпа_50" /><br />
	<input type="submit" name="check" value="Купи" />
		
	</form>
</body>
</html>