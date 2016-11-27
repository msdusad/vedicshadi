<?php
require_once('common.php');
class Register{

public   function register(){

$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);
$password=MD5($password);
$email=mysql_real_escape_string($_POST['email']);
$token_id=rand(1,9999999999);


	$register="insert into users (name,email,password,created_at,updated_at,token_id) values('$name','$email','$password',now(),now(),$token_id);";
	
$obj=Common::InsertData($register);
if($obj==true){
	$userloginacess="select * from users where email='$email' && password='$password' && token_id='$token_id'";
$userstrt=Common::FetchData($userloginacess);

foreach ($userstrt as $uservalue) {
	$_SESSION['userid']=$uservalue['id'];
$uservalue=$_SESSION['userid'];

$profilefill="insert into fullprofile (userid) values('$uservalue');";
$profile_obj=Common::InsertData($profilefill);

}
	
      header('Location:../complete-profile.php');
      return $obj;
}
else{
	return "not inserted";
}
}
}

if(isset($_POST['name'])){


$set=new Register;
$set->register();
//echo $set;

}

?>