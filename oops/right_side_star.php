<?php 
$height=7;
$spacing=$height -1; 
 $hashes=1; 
for ($i=0; $i<$height; $i++) 
{ 
    for ($j=$spacing; $j>0; $j--) 
    { 
        echo "&nbsp;&nbsp;"; 
    } 
    for ($k=0; $k<$hashes; $k++) 
    { 
        echo "#"; 
    } 
    $spacing--; 
    $hashes ++; 
   echo "<br/>"; 
}