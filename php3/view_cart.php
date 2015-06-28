
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Остатък в картата</title>
</head>
<body>
	<?php
		session_start();
		$price = $_POST['sum'];

		$sum = $_SESSION['cart_maney'] - $price;

		echo 'В твоята карта остават ' . $sum . 'лв.';

		$_SESSION['cart_maney'] = $sum;

	?>
	<a href="products.php">Продължи с покупките</a>
	</body>
</html>