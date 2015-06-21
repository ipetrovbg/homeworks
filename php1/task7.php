<?php

$a = 4;
$b = 11;
$masiv = array(
    
    'a'     => $a,
    'b'     => $b
    
);
echo '$a = ' . $a . '<br />';
echo '$b = ' . $b . '<br />';

$a = $masiv['b'];
$b = $masiv['a'];

echo '$a = ' . $a . '<br />';
echo '$b = ' . $b;