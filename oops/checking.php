<?php

$value=200;
$m="Mahender";
function changevalue(){
$value=250;

}
echo("$value"." "."$m");

$var="Mahender''s";
$var1=mysql_real_escape_string($var);
$var2=stripcslashes($var);

echo "<br>".$var;
echo "<br>".$var1;
echo "<br>".$var2;
?>
