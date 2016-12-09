<?php
include('Connection.php');
// mysql_connect("localhost","root","");

 class  FetchData{

private static $qry;
private $rows;

function query($query){
$this->qry=mysql_query($query);
}
function rows(){
$numofrow=mysql_num_rows($this->qry);	
return $numofrow;
}
function data(){
	$rows=array();
	while($row=mysql_fetch_array($this->qry)){
		$rows[]=$row;
	}
	return $rows;
}
public static function testing($newqury){
	$qry=mysql_query($newqury);
		$rows=array();
	while($row=mysql_fetch_object($qry)){

		$rows[]=$row;
	}
	return $rows;
}
}
$firstquery="select * from detail";
$obj=new FetchData();
$s=$obj->query($firstquery);
$r=$obj->rows();
$q=$obj->data();
foreach ($q as  $data) 
	
	echo $data['id']." ".$data['first_name']." ".$data['last_name']." ".$data['age']."<br>";


$stfetch=FetchData::testing($firstquery);

foreach ($stfetch as  $data) 
	
	echo $data->id."<br>";
$m="kd";
if($m=='a')
	echo "g";
else if($m=="k")
	echo "hh";

else
echo"hhh";


