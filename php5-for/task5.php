<?php
/*

1
1
2 		$step_two
3 		$step_one

5 $fi 			= 			$step_one + $step_two               $step_one = 
8 
13

*/
$n = 1000;
$step_one = 0;
$step_two = 0;
$fi = 0;
//Fn = F(n-1) + F(n-2)

for($i=0; $i <= $n; $i++) { 
	
	if ($i == 0) {

		
		$fi = 1;
		$step_one = 1;


		
		

	}elseif($i == 1){
		echo $i . ' - ' . $fi . '<br />';
		$step_one = $fi;
		$fi = $step_one + $step_two;

	}else{
		echo $i . ' - ' . $fi . '<br />';
		$step_two = $step_one;
		$step_one = $fi;
		$fi = $step_one + $step_two;

	}
	echo '<br />';

}

echo $fi;