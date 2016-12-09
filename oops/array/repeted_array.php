<?php
$array=array('1','3','3','5','7','7');
$temp_arr=array();
foreach ($array as $value) {
	# code...
if(!in_array($value, $temp_arr)){

	$temp_arr[]=$value;
}
else{

	echo "Duplicate Array : ".$value."<br>";
}

}


?>