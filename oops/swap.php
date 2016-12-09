<?php 
$a = 5;
$b = 6;
//list($a, $b) = array($b, $a);
//print $a . ',' . $b;

$temp = $a;
$a = $b;
$b = $temp;
echo $a." ".$b;