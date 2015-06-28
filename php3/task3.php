<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 3 - php html forms - Онлайн магазин</title>
</head>
<body>

	<?php
	session_start();

		if (isset($_POST['log'])) {
			
			$user = $_POST['user'];
			$pass = $_POST['pass'];


			if (strlen($user) > 0) {
				
				if (strlen($pass) > 0) {
					
					$_SESSION['user'] = $user;
					echo 'Здравей, ' . $_SESSION['user'] . '. Успешно се log-на в системата!<br />';
					echo 'Моля, въведи банковата си сметка, като последваш този линк. >> <a href="cart.php">Банкова сметка</a>';

				}else{

					echo 'Въведете по-дълга парола!';

				}

			}else{

				echo 'Въведете по-дълго потребителско име!';

			}

		}

		?>
	<form method="post" action="">
		
		Потребителско име: <input type="text" name="user" /><br />
		Парола: <input type="password" name="pass" /><br />
		<input type="submit" name="log" value="Вход" />

	</form>
</body>
</html>