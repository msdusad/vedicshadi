<?php
$host="localhost";
$userid="root";
$password="";
$dbname="oopstest";


// connectivity with my website 
/*
$host="mysql16.000webhost.com";
$userid="a4407416_mahender";
$password="mahenders1";
$dbname="a4407416_mail";
*/

$dbconnect= mysql_connect($host,$userid,$password);
if($dbconnect){
  $db=mysql_select_db($dbname);
    if($db){
  }
    else{
        echo "error in db selection".mysql_error();
    }


}
else{
 echo "error in mysql connecting".mysql_error();   
}

?>