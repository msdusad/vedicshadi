<?php
/**
* 
*/
class Connection 
{
	private $host="localhost";
	private $username="root";
	private $password="";
	private $db="oopstest";

	function __construct()
	{
		$conn=mysql_connect($this->host,$this->username,$this->password);
		if($conn){
			return $this->selectdb($this->db);
		}
		else{
die("Not Connected");
		}

	}
	function selectdb($getdb){
$dbselect=mysql_select_db($getdb);
if($dbselect){
  // echo "Connected";
}
else{
die("Error in Db Selection");
}

	}
}
$obj=new Connection();
//echo $out;
?>