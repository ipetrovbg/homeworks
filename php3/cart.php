<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 3 - php html forms - Банкова сметка</title>
</head>
<body>

	<?php
		session_start();

		if (isset($_POST['check'])) {
			
			$cart_number	= $_POST['cart_number'];
			$cart_maney		= $_POST['cart_maney'];

			if (strlen($cart_number) < 28 && strlen($cart_number) > 0)  {
				
				if ($cart_maney > 0) {
					
					$_SESSION['cart_number']	= $cart_number;
					$_SESSION['cart_maney']		= $cart_maney;
					echo $_SESSION['user'] . ', твоята карта с №: <b>' . $_SESSION['cart_number'] . '</b>, беше заредена с: <b>' . $_SESSION['cart_maney'] . '</b>лв.';
					echo '<p>Може да напазаруваш! <a href="products.php">Продукти</a></p>';					

				}else{

					echo $_SESSION['user'] . ' зареди с по-голяма сума пари!';

				}

			}else{

				echo "Въведете валидна IBAN сметка!";

			}

		}

	?>
	<hr />
	<p><i>Здравей, <?php echo $_SESSION['user']; ?></i></p>
	<p><i>В тази форма трябва да въведеш номера на твоята карта и наличната сума (Ако ти стиска, няма никаква защита :D).</i></p>

	<form method="post" action="">
		
		IBAN номер: <input type="text" name="cart_number" /><br />
		Сума /в лева/: <input type="numeric" name="cart_maney" /><br />
		<input type="submit" name="check" value="Въведи" />

	</form>
</body>
</html>