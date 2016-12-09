<?php
require_once('db.php');
/**
* 
*/
class FetchData
{
	
	function oopsdata()
	{
		# code...
		$query=mysql_query("select * from tbl1");
		$data=array();
		while($row=mysql_fetch_array($query)){
             $data[]=$row;
		}
		return $data;
	}
}
$obj1=new FetchData();
$val=$obj1->oopsdata();
?>