<?php
require_once('common.php');
class Login{
private $_username;
private $_password;
public function __construct($user,$pass){
$this->_username=mysql_real_escape_string($user);
$this->_password=mysql_real_escape_string($pass);
$this->_password=MD5($this->_password);
return $this->login();
}
public  function login(){
$login="select * from users where email='$this->_username' && password='$this->_password'";
$obj=Common::FetchData($login);
if($obj==false){
	echo "<script>alert('Wrong Username/Password');window.location.href='../signin.php';</script>";
echo "Login Failed , Wrong Username/Password";
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



	if($loginuser['email']=='admin@gmail.com'){
header('Location:../admin.php');
	}
	else{
      header('Location:../view-profile.php');
	}
  }
}
}
}
}

          
          
if(isset($_POST['Login'])){
  $Login_result=new Login($_POST['username'],$_POST['password']); 
}

//  $test_login=new Login('msdusad','msdusad');
?>