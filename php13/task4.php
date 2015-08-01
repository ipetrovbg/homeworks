<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor  45 lv  incididunt ut labore 45 lv et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation 50 lv ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in 100 lv reprehenderit in voluptate  45 lv velit esse
cillum dolore eu 150 lv fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";
$matches = array();
preg_match("/\b[0-9]+\s[lv]{2}/", $text, $matches);

foreach ($matches as $key => $value) {
	echo $value;
}

