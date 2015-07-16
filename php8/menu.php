<?php
	
	$menu = array(

		'Начало'		=>		'http://localhost/VSS/PHP/homeworks/php8/task2.php',
		'За нас'		=>		'http://localhost/VSS/PHP/homeworks/php8/about.php',
		'Контакти'		=>		'http://localhost/VSS/PHP/homeworks/php8/contact.php',
		'Блог'			=>		'http://localhost/VSS/PHP/homeworks/php8/task5.php',


		);

	function menu($m){

		foreach ($m as $key => $value) {
			
			echo '<li><a href="'. $value .'">' . $key . '</a></li>';

		}

	}