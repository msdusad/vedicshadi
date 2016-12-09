<?php
echo $var="This is a unique sentance is.";
if(isset($_GET['submit']) && !empty($_GET['search'])){

echo replaced();
}

function replaced(){
global $var;
$find=$_GET['search'];
//	$find=preg_match($find, $var);
$replace=$_GET['rep'];
$new_stence=str_replace($find, $replace, $var);
//$new_stence=substr_replace($var, $replace, $find);
return $new_stence;
}




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="get">
<input type="text" name="search" placeholder="Find">
<input type="text" name="rep" placeholder="Replace With">
<input type="submit" name="submit" value="Search">
</form>
</body>
</html>
