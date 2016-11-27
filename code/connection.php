<?php

class Connection{

public $host;
public $user;
public $pass;
public $db;



 function  __construct(){

 		if(!isset($_SESSION)){
session_start();
}


$this->host=$_SERVER['HTTP_HOST'];
$ab=$this->host;
if($ab =="localhost"){
	
$this->user="root";
$this->pass="";
$this->db="vedicshadi";
}

else{
	$this->user="root";
$this->pass="";
$this->db="vedicshadi";
}

mysql_connect($this->host,$this->user,$this->pass);
mysql_select_db($this->db);

}
}

$c=new Connection();
?>