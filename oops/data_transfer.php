<?php
include('db.php');
$val="dd";
$tr=mysql_query("INSERT INTO tbl2 (first_name,last_name) SELECT first_name,last_name FROM tbl1 WHERE id='1';");
if($tr){
echo "Data Transfer Sucess";

}
else{

	echo "Error in data trnsfer".mysql_error();
}

?>