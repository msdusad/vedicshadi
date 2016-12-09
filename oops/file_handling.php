<?php
$d='mycore';
$dir=opendir($d.'/');
while($readdir=readdir($dir)){
	echo $readdir."<br>";

	$filename='add-sub.php';


}
$filename="mycore/add-sub.php";
if(file_exists($filename)){
echo "file exists";
}
else{
	echo "no file found";
}
//$file=fopen('filename.txt', 'w');
//$fwrite=fwrite($file, "Mahender Singh");
/**
* 
*/
class Mahender 
{
	
	function mahender(){
	
	$mahender=array('1','2','3');
	return $mahender;
}

}

$mss=new Mahender;
$ms=$mss->mahender();
print_r($ms);
?>