<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<title>Задача 3 - php loops - оцветяване на текст</title>
</head>
<body bgcolor="grey">

	<?php

		$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

			$ex_text = explode(' ', $text);
			$first_text = 2;

			foreach ($ex_text as $key => $value) {
				
				if ($key%2 == 0) {
					
					echo '<span style="color: white">' . $value . ' </span>';
					
					if ($key%1 == 0) {

						echo '<span style="color: green">' . $value . ' </span>';

					}

				}else{


					echo '<span style="color: red">' . $value . ' </span>';


				}

				

			}
	?>

</body>
</html>