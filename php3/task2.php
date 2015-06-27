<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 2 - php html forms - Регистрационна форма за форум</title>
</head>
<body>

	<?php
		
		if (isset($_POST['submit'])) {
			
			$user 		= 		$_POST['username'];

			$pass1 		= 		$_POST['pass1'];
			$pass2 		= 		$_POST['pass2'];

			$email 		= 		$_POST['email'];

			$interes 	= 		$_POST['interes'];

			$regex = "^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$^";

			if ($pass1 == $pass2) {
				
				if(preg_match($regex, $email)) {


				echo 'Здравей, <b>' . $user . '</b><br /> Въведеният от теб email: <b>';

			     echo $email . "</b> e валиден!<br />";

				    if(!empty($interes)){

				    	$N = count($interes);

					    if($N == 1){

					    	echo '<b>' . $user . '</b>, ти избра ' . $N . ' интерес! Ето го и него: <br /><b>';

						}else{

							echo '<b>' . $user . '</b>, ти избра ' . $N . ' интереси! Ето ги и тях: <br />';

						}
					    for($i=0; $i < $N; $i++){

					    	switch ($interes[$i]) {
					    		case 'music':
				    				echo '<b>Музика</b> ';
				    			break;
					    		
					    		case 'futbol':
				    				echo '<b>Футбол</b> ';
				    			break;

				    			case 'computers':
				    				echo '<b>Компютри</b> ';
				    			break;

				    			case 'books':
				    				echo '<b>Книги</b> ';
				    			break;

				    			case 'photography':
				    				echo '<b>Фотография</b> ';
				    			break;

					    		default:
					    			# code...
					    			break;
					    	}

					    }
					    echo '<hr />';
					    

					}else{

					    echo("Не сте въвели никакви интереси. Въведете поне един");
					}

				} else { 

				     echo $email . " е невалиден email адрес. Моля, въведете реален email!";

				}

			}else{

				echo 'Паролите не съвпадат. Моля, опитайте отново!';

			} 

			

		}

	?>
	<form method="post" action="">

		Потребителско име: <input type="text" name="username" value="" /><br />

		Парола: <input type="password" name="pass1" value="" /><br />

		Повтори паролата: <input type="password" name="pass2" value="" /><br />

		E-mail: <input type="text" name="email" value="" /><br />

		Музика > <input type="checkbox" name="interes[]" value="music" />

		Футбол > <input type="checkbox" name="interes[]" value="futbol" />

		Компютри > <input type="checkbox" name="interes[]" value="computers" />

		Книги > <input type="checkbox" name="interes[]" value="books" />

		Фотография > <input type="checkbox" name="interes[]" value="photography" /><br />

		<input type="submit" name="submit" value="Регистрация" />

	</form>
</body>
</html>