<?php 
$a = 5;
$b = 6;
list($a, $b) = array($b, $a);
print $a . ',' . $b.'<br> ';

//with temp third variable

$a=50;
$b=60;
$temp=$a;
$a=$b;
$b=$temp;
echo $a." and ".$b."</br> ";

//another logic without any function

$a =  $a + $b;  // 5 + 6 = 11
$b = $a - $b;   // 11 - 6 = 5
$a = $a - $b;  // 11 - 5 = 6
print $a . ',' . $b.'<br>';

//another Logic of Swap Values

function swap1(&$x,&$y) {
    $x ^= $y ^= $x ^= $y;
echo $x." or ".$y;
}
swap1($a,$b);
$n=2;
$m=5;
echo "<br>".$n^=$m ^= $n^= $m;
echo "<br>".$m	;

?>
