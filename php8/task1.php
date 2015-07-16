<?php

function print_num(){

	$num = 42;

	for ($i=1; $i <= 32; $i++) { 
		
		echo $num . ' ';
		$num--;

	}

}
?>

<h3><?php print_num(); ?></h3>
<div><?php print_num(); ?></div>
<p><?php print_num(); ?></p>