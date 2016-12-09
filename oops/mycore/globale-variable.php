<?php
$user_ip=$_SERVER['REMOTE_ADDR'];
//echo $user_ip;
function viewip(){
global $user_ip; // using a variable globally
	return  "My Ip Address Is".$user_ip;
}
echo viewip();
?>