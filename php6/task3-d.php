<?php

$s = 0;
$count = 0;

    for ($i = 0; $i <= $s / 10; $i++){

        for ($j = 0; j <= ($s / 4); $j++){

            for ($l = 0; $l <= ($s / 3); $l++){

                $all = ($i * 10) + ($j * 4) + ($l * 3);

                if ($all == $s) {
                 $count++; 
             	}
             	
                if ($all > s) { 
                	break; 

                }

                }
        }
    }
    return $count;