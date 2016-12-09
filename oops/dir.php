<?php
$dir="mycore";
$opendir=opendir($dir.'/');
while($allfiles=readdir($opendir)){
echo $allfiles."<br>";
}

?>
