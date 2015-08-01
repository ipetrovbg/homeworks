<?php
require_once('function.php');

$text = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

// ------------------------------------------------------------------------------

$text2 = "This property specifies the indentation of 
the first line of text in a block container. More 
precisely, it specifies the indentation of the first 
box that flows into the block's first line box. The box 
is indented with respect to the left (or right, for right-to-left layout) 
edge of the line box. User agents must render this indentation as blank space.";



echo '<h1>Full text</h1>';
echo $text;

// -------------------------------------------

echo '<h1>First replaced half text</h1>';
f($text);

// -------------------------------------------

echo '<h1>Second replaced half text</h1>';
f($text2);



