<?php
function  power($num, $pow) {
 
if ($pow < 1)
 
return 1;
 
else
 
return $num * power($num, $pow-2);
 
}
echo power(5, 3)."<br>";
echo pow(5, 3); // This is the php built-in method
//echo 2 ** 3; //This is beyond php 5.6
$y=45;
$x=$y;
echo $x;