<?php
$array=array('1','12','5','9');
// for ($i=0; $i < count($array); $i++) { 
// 	# code...
// for ($j=0; $j < count($array)-1 ; $j++) { 

// 	# code...
// 	if($array[$j]>$array[$j+1]){																		
// $temp=$array[$j+1];
// $array[$j+1]=$array[$j];
// $array[$j]=$temp;

// }

// }

// }
// print_r($array);
for($i=0;$i<count($array);$i++){

for($j=0;$j<count($array)-1;$j++){

if($array[$j]>$array[$j+1]){
	$temp=$array[$j+1];
	$array[$j+1]=$array[$j];
	$array[$j]=$temp;


}

}

}
print_r($array);
?>