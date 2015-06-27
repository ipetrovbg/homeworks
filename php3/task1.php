<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 1 - php + html forms - Събития</title>
	<link type="text/css" rel="stylesheet" href="default.css" />
</head>
<body>
	<form method="get" action=""> <!--  task1-2.php -->
		<table align="center">
		<tr>
			<td colspan="4" align="center"><h4>Търсачка за събития</h4></td>

		</tr>	
				
			
		<?php

			if (!empty($_GET['sub'])) {
				
		?>

			<tr>
				<td colspan="4" align="center">
		<?php

		switch ($_GET['event']) {
			case 'sport':
				
				switch ($_GET['city']) {
					case 'vratsa':
						echo 'Отбелязване на Mеждународния олимпийски ден във Враца';
						break;
					case 'sofia':
						echo 'Локо Сф обърна ЦСКА, отива на финал срещу Ботев Пд';
						break;
					case 'plovdiv':
						echo 'Локо Пд подписа с вратар и халф от Локо Сф';
						break;
					default:
						# code...
						break;
				}

				break;
			case 'music':
				

				switch ($_GET['city']) {
					case 'vratsa':
						echo 'Vola Open Air Festival Враца';
						break;
					case 'sofia':
						echo 'Zona Cultura Fest София';
						break;
					case 'plovdiv':
						echo 'Международен фестивал на камерната музика Пловдив';
						break;
					default:
						# code...
						break;
				}

				break;

			case 'culture':
				
					switch ($_GET['city']) {
					case 'vratsa':
						echo 'ХХVIII Национален фестивал на малките театрални форми във Враца';
						break;
					case 'sofia':
						echo 'Международен фестивал „Софийски музикални седмици” - 2015';
						break;
					case 'plovdiv':
						echo 'ONE DESIGN WEEK 2015 Пловдив';
						break;
					default:
						# code...
						break;
				}

				break;

			default:
				# code...
				break;
		}
		?>

			</td>
		</tr>

		<?php

	}

?>

			
			<tr>
				<td align="right">Спорт</td><td align="left"><input type="radio" name="event" value="sport" checked="checked" /></td>
				<td>Избери град</td>			
			</tr>
			<tr>
				<td align="right">Музика</td><td align="left"><input type="radio" name="event" value="music" /></td>
				<td rowspan="2">
					<select id="city" name="city">
						<option value="vratsa">Враца</option>
						<option value="sofia">София</option>
						<option value="plovdiv">Пловдив</option>
					</select>
				</td>			
			</tr>
			<tr>
				<td align="right">Култура</td><td align="left"><input type="radio" name="event" value="culture" /></td></td>
			</tr>
			<tr>
				<td colspan="3" align="center" ><input id="sub" type="submit" name="sub" value="Търси" /></td>
			</tr>
		</table>
	</form>
</body>
</html>