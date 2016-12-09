<?php
class db{
 public $host="localhost";
 public $user="root";
 public $pass="";
   public  $db="nexg"; 
    function co(){
   $dbconn=mysql_connect($host,$user,$pass,$db); 
        $m="maheder";
        return true;
    }
}
$ans=new db();
echo $ans->co()->$m;

?>