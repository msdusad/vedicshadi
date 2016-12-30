<?php
require_once('common.php');
if(isset($_GET['email']) && $_GET['token']){
$email=$_GET['email'];
$token=$_GET['token'];
$register="update users set verified='1' where email='$email' && token_id='$token';";	
$obj=Common::InsertData($register);
if($obj==true){

$login="select * from users where email='$email' && token_id='$token'";
$obj=Common::FetchData($login);
if($obj==false){
//	echo "<script>alert('Wrong Username/Password');window.location.href='../signin.php';</script>";
//echo "Login Failed , Wrong Username/Password";
}
else{

	if(!isset($_SESSION)){
session_start();
}

foreach($obj as $loginuser){

if($loginuser['verified']=='0'){

header('Location:../email_verification.php');

}
else{
	
	$_SESSION['userid']=$loginuser['id'];
	$_SESSION['tokenid']=$loginuser['token_id'];
    $_SESSION['email']=$loginuser['email'];


	if($loginuser['email']=='admin@gmail.com'){
header('Location:../admin.php');
	}
	else{
      header('Location:../complete-profile.php');
	}
  }
}
}




//header('Location:../signin.php');
}
else{

	header('Location:../index.php');
}

}

?>