<?php
require_once('common.php');
if(isset($_GET['email']) && $_GET['token']){
$email=$_GET['email'];
$token=$_GET['token'];
$register="update users set verified='1' where email='$email' && token_id='$token';";	
$obj=Common::InsertData($register);
if($obj==true){

header('Location:../signin.php');
}
else{

	header('Location:../index.php');
}

}

?>