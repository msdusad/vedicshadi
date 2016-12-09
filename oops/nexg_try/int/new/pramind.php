<?php
// problem 01 solution
for($i=5;$i>=1;$i--)
{
echo  str_repeat('*',$i);
echo "<br />";
}

echo "<hr />";

// problem 02 solution

echo '<p>';

for($i=0;$i<=9;$i++){
 
    for ($d=10-$i; $d > 0; $d--)  {
 
        echo    "&nbsp;&nbsp;";
    }
    for($j=1;$j<=$i;$j++){
 
        echo "&nbsp;".$i."&nbsp;";
 }
 
 echo "<br>";
 
} 
echo "</p>";

echo "<hr />";
// problem 03 solution

$j=1;

for($i=5;$i>=1;$i--)
{
echo  str_repeat("&nbsp;",$i-1);
echo  str_repeat('*',$j++);
echo "<br />";
}

?>
