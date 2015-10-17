<?php
function bubble_sort($arr) {

    $size = count($arr); // взимаме размера на масива

    for ($i=0; $i<$size; $i++) { // $i=0; докато променливата $i е < от count($arr) $i++

        for ($j=0; $j<$size-1-$i; $j++) { // $j=0; докато $j < от размера на масива count($arr) - 1 - $i; $j++

            if ($arr[$j+1] < $arr[$j]) {

                swap($arr, $j, $j+1);

            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

/* test bubble sort */

$arr = array(1,3,2,8,5,7,4,0);
$arr2 = array(100,3,7,20,5,7,1,0);

print("Before sorting");
print_r($arr);
echo "<br />";
$arr = bubble_sort($arr);
print("After sorting by using bubble sort");
print_r($arr);
echo "<br />";
$arr2 = bubble_sort($arr2);
print("After sorting by using bubble sort");
foreach ($arr2 as $key => $value) {
	echo $value . '<br />';
}