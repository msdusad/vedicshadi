<?php
require_once('common.php');
class Register{

public   function register_user(){

$name=mysql_real_escape_string($_POST['name']);
$password=mysql_real_escape_string($_POST['password']);
$password=MD5($password);
$email=mysql_real_escape_string($_POST['email']);
$token_id=rand(1,9999999999);


	$register="insert into users (name,email,password,verified,created_at,updated_at,token_id) values('$name','$email','$password','0',now(),now(),$token_id);";
	
$obj=Common::InsertData($register);

	$userloginacess="select * from users where email='$email' && password='$password' && token_id='$token_id'";
$userstrt=Common::FetchData($userloginacess);

foreach ($userstrt as $uservalue) {
// 	$_SESSION['userid']=$uservalue['id'];
 $setid= $uservalue['id'];

$profilefill="insert into fullprofile (userid) values ('$setid');";
$profile_obj=Common::InsertData($profilefill);

if($uservalue['verified']=='0'){

header('Location:../email_verification.php');

}


}
	

		$subject = 'VedicShadi Account Activation Confirmation Mail';
$message = ("Dear  $name ,<br>Greetings!!!<br>
Your Account had been created sucessfully :<br>
For Confirmation <a href='http://vedicshadi.com/code/email_confirm.php?email=$email&token=$token_id'> Click Hear </a><br>
<b>Thanks and Regards,<br>
VedicShadi<br>
info@vedicshadi.com
</b>
");  
        
 $header= 'From: info@vedicshadi.com' . "\r\n" .
          'Reply-To: info@vedicshadi.com' . "\r\n" .
          'X-Mailer: PHP/' . phpversion();
$header.= "MIME-Version: 1.0\r\n"; 
$header.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header.= "X-Priority: 1\r\n"; 
 mail($email, $subject, $message, $header);	

     // header('Location:../complete-profile.php');
     // return $obj;

}
}

if(isset($_POST['name'])){
$set=new Register;
$set->register_user();
//echo $set;

}

?>