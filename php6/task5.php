<?php

$movies = array(array());


$movies[0] = array(

	'title'			=> 		'Apollo 18',
	'years'			=> 		'2011',
	'budget'		=> 		'5 000 000',
	'genres'		=> 		'Sci-Fi',
	'main_actor'	=>		'Warren Christie'

	);
$movies[1] = array(

	'title'			=> 		'The Bridges of Madison County',
	'years'			=> 		'1995',
	'budget'		=> 		'22 000 000',
	'genres'		=> 		'romantic',
	'main_actor'	=> 		'Clint Eastwood'

	);
$movies[2] = array(

	'title'			=> 		'Harry Potter and the Chamber of Secrets',
	'years'			=> 		'2002',
	'budget'		=> 		'100 000 000',
	'genres'		=> 		'fantasy',
	'main_actor'	=> 		'Daniel Radcliffe'

	);
$movies[3] = array(

	'title'			=> 		'The Lord of the Rings',
	'years'			=> 		'2001',
	'budget'		=> 		'93 000 000',
	'genres'		=> 		'fantasy',
	'main_actor'	=> 		'Elijah Wood'

	);
$movies[4] = array(

	'title'			=> 		'I am Legend',
	'years'			=> 		'2007',
	'budget'		=> 		'150 000 000',
	'genres'		=> 		'post-apocalyptic',
	'main_actor'	=> 		'Will Smith'

	);


$actors = array(array());


$actors[0] = array(

	'name'			=>		'Clint Eastwood',
	'national'		=>		'American',
	'age'			=>		'85',
	'oscars'		=>		'7',

	);
$actors[1] = array(

	'name'			=>		'Jack Nicholson',
	'national'		=>		'American',
	'age'			=>		'78',
	'oscars'		=>		'3',

	);
$actors[2] = array(

	'name'			=>		'Robert De Niro',
	'national'		=>		'American',
	'age'			=>		'71',
	'oscars'		=>		'2',

	);
$actors[3] = array(

	'name'			=>		'Anthony Hopkins',
	'national'		=>		'Wales',
	'age'			=>		'77',
	'oscars'		=>		'1',

	);
$actors[4] = array(

	'name'			=>		'Morgan Freeman',
	'national'		=>		'American ',
	'age'			=>		'78',
	'oscars'		=>		'1',

	);
echo '<h3>Movies</h3>';
	for ($i=0; $i < count($movies); $i++) { 
	
	foreach ($movies[$i] as $key => $value) {
		
		echo $key . ' - ' . $value . '<br />';

	}
	echo '<hr />';

}

echo '<h3>Actors</h3>';
for ($i=0; $i < count($actors); $i++) { 
	
	foreach ($actors[$i] as $key => $value) {
		
		echo $key . ' - ' . $value . '<br />';

	}
	echo '<hr />';

}
	