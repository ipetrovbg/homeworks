 <!DOCTYPE html>
 <html>


 <head>
 	<meta charset="utf-8" />
 	<title>Задача 6 - Програма от цифра в текст</title>
 </head>
 <body>

<?php 

	if (isset($_GET['submit'])) {
		
		$number = $_GET['number'];

		if(is_numeric($number)){
			if($number < 10){

				switch ($number) {
					case '1':
						echo 'едно';
						break;
					case '2':
						echo 'две';
						break;
					case '3':
						echo 'три';
						break;
					case '4':
						echo 'четири';
						break;
					case '5':
						echo 'пет';
						break;
					case '6':
						echo 'шест';
						break;
					case '7':
						echo 'седем';
						break;
					case '8':
						echo 'осем';
					break;
					case '9':
						echo 'девет';
						break;
					case '0':
						echo 'Въведете число по-голямо от 0';
					break;
					default:
						
						break;

				}
			}else{

				echo 'Въведете число от 1 до 9';

			}

		}else{
			echo 'Не сте въвели число!';
		}

	}

 ?>

 	<form method="get" action=""> 
 		
 	<input type="numeric" name="number" value="" /><br />
 	<input type="submit" name="submit" value="Изпрати">

 	</form>
 </body>
 </html>