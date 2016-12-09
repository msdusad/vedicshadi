<?php
$a="Dome";
if($a=='dome'){
	//echo "yes";

}
else{

	//echo "no";
}

$arrayName = array('one' =>'5' ,'two'=>'maahi','ss'=>'44' );
$arr2= array('three' =>'6' ,'four'=>'12' );
$decide=array_merge($arrayName,$arr2);

$all_data[] = $arrayName;
$all_data[] = $arr2;
//$all_data[] = $third_array;
$arr['result'] = $all_data;
//print_r(json_encode($arr));

$x = 'ms';
var_dump($x);
$null=null;
//$empty=empty;
echo "<br>".$null."<br><br>";
var_dump($null);
echo serialize($arr2);
?>