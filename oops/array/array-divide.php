<?php
$array=array('4','6','16','30','15');
foreach ($array as $val) {
	# code...

if($val % 4 == 0){

echo "Divided Array : ".$val."<br>";


}
else{

	echo "Not Divided : ".$val."<br>";
	// increasing value till divived by 4
	if($val % 4 != 0) {
  $val += 4 - ($val % 4);
  echo $val;
}

}

}
?>