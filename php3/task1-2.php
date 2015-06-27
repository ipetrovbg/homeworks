<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Задача 1 - php + html forms - Събития - нов файл</title>
</head>
<body>
	<?php

			if (!empty($_GET['sub'])) {

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
			}
	?>
</body>
</html>