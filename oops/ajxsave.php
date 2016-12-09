<?php
if(isset($_POST['senddata'])){
$a=$_POST['senddata'];
	echo $a;
}
else{
	echo "string";
}
// include('db.php');
// $fname=$_POST['lastmsg'];
// $lname="m";
// $tr=mysql_query("INSERT INTO tbl1 (first_name,last_name) VALUES ('$fname','$lname');");
// if($tr){
// echo "Data Transfer Sucess";
// }
// else{

// 	echo "Error in data trnsfer".mysql_error();
// }
?>