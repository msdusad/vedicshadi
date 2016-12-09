<?php
class Connection{

private $host="localhost";
private $user="root";
private $pass="";
private $db="zendframework";
public function __construct(){

mysql_connect($this->host,$this->user,$this->pass) or die('Connection Failed Mysql');

mysql_select_db($this->db) or die('Db Not Found');

return "Connection Established";

}

}
new Connection();
?>