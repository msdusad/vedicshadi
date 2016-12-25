<?php

require_once('common.php');
class CompleteProfile{

public  function updateprofile(){

     $user=$_SESSION['userid'];
	$name=mysql_real_escape_string($_POST['name']);
    $email=mysql_real_escape_string($_POST['email']);
    $dob=mysql_real_escape_string($_POST['dob']);
    $mobile_number=mysql_real_escape_string($_POST['mobile_number']);
    $profile_for=mysql_real_escape_string($_POST['profile_for']);
    $gender=mysql_real_escape_string($_POST['gender']);
    $religion=mysql_real_escape_string($_POST['religion']);
    $veg=mysql_real_escape_string($_POST['veg']);
    $matirian_status=mysql_real_escape_string($_POST['matirian_status']);
    $mother_toung=mysql_real_escape_string($_POST['mother_toung']);
    $cast=mysql_real_escape_string($_POST['cast']);
    $height=mysql_real_escape_string($_POST['height']);
    $body_color=mysql_real_escape_string($_POST['body_color']);
    $father_name=mysql_real_escape_string($_POST['father_name']);
    $mother_name=mysql_real_escape_string($_POST['mother_name']);
    $brother_sister=mysql_real_escape_string($_POST['brother_sister']);
    $address=mysql_real_escape_string($_POST['address']);
    $education=mysql_real_escape_string($_POST['education']);
    $job_profile=mysql_real_escape_string($_POST['job_profile']);
    $other_details=mysql_real_escape_string($_POST['other_details']);
    $describe_yourself=mysql_real_escape_string($_POST['describe_yourself']);

       if(empty($_FILES['profilepic']['name'])) {
        $pic=$_POST['picsd'];
    }
    else{
        $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profilepic"]["name"]);
$extension = end($temp);
if ((($_FILES["profilepic"]["type"] == "image/gif")
|| ($_FILES["profilepic"]["type"] == "image/jpeg")
|| ($_FILES["profilepic"]["type"] == "image/jpg")
|| ($_FILES["profilepic"]["type"] == "image/pjpeg")
|| ($_FILES["profilepic"]["type"] == "image/x-png")
|| ($_FILES["profilepic"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)){
    
    $pic=$_FILES['profilepic']['name'];
     $profilepic="../profile_pics/".$_FILES['profilepic']['name'];
    
   // code for if file exists in folder
   
$addtional="1";
while (file_exists($profilepic)) {
	$info=pathinfo($profilepic);
	$profilepic=$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
	$pic=$info['filename'].$addtional.'.'.$info['extension'];
}
    // end here file exists
    
	move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
}
        
        else{
$pic=$_POST['picsd'];
      echo '<script type="text/javascript">alert("please upload  an Valid Image");window.location ="../complete-profile.php";</script>'; 
            
        }
    } 

$updatelogin="update users set name='$name',email='$email' where id='$user'";
$obj=Common::InsertData($updatelogin);


  $update_qry="update fullprofile set dob='$dob',mobile_number='$mobile_number',profile_for='$profile_for',gender='$gender',religion='$religion',veg='$veg',matirian_status='$matirian_status',mother_toung='$mother_toung',cast='$cast',height='$height',body_color='$body_color',father_name='$father_name',mother_name='$mother_name',brother_sister='$brother_sister',address='$address',education='$education',job_profile='$job_profile',other_details='$other_details',describe_yourself='$describe_yourself',profile_pic='$pic',updated_at=now() where userid='$user'";

$obj=Common::InsertData($update_qry);
if($obj==true){	
      header('Location:../complete-profile.php');
}
else{
	echo mysql_error();
}




}


public  function contactus(){

    $name=mysql_real_escape_string($_POST['name']);
    $email=mysql_real_escape_string($_POST['email']);
    $subject=mysql_real_escape_string($_POST['subject']);
    $message=mysql_real_escape_string($_POST['message']);

    $contact="insert into contact_us (name,email,subject,message,submit_date) values ('$name','$email','$subject','$message',now())";
$obj=Common::InsertData($contact);
if($obj==true){ 
      header('Location:../contact.php?submit=success');
}
else{
    echo mysql_error();
}

    }



    public  function member_add(){
    $name=mysql_real_escape_string($_POST['name']);
    $email=mysql_real_escape_string($_POST['email']);
    $mobile_number=mysql_real_escape_string($_POST['phone_number']);
    $address=mysql_real_escape_string($_POST['address']);
    $adhar_number=mysql_real_escape_string($_POST['adahar_number']);

       if(empty($_FILES['member_pic']['name'])) {
        $pic="";
    }
    else{
        $allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["member_pic"]["name"]);
$extension = end($temp);
if ((($_FILES["member_pic"]["type"] == "image/gif")
|| ($_FILES["member_pic"]["type"] == "image/jpeg")
|| ($_FILES["member_pic"]["type"] == "image/jpg")
|| ($_FILES["member_pic"]["type"] == "image/pjpeg")
|| ($_FILES["member_pic"]["type"] == "image/x-png")
|| ($_FILES["member_pic"]["type"] == "image/png"))
&& in_array($extension, $allowedExts)){
    
    $pic=$_FILES['member_pic']['name'];
     $profilepic="../profile_pics/".$_FILES['member_pic']['name'];
    
   // code for if file exists in folder
   
$addtional="1";
while (file_exists($profilepic)) {
    $info=pathinfo($profilepic);
    $profilepic=$info['dirname']."/".$info['filename'].$addtional.'.'.$info['extension'];
    $pic=$info['filename'].$addtional.'.'.$info['extension'];
}
    // end here file exists
    
    move_uploaded_file($_FILES['member_pic']['tmp_name'],$profilepic);
}
        
        else{
$pic="";
      echo '<script type="text/javascript">alert("please upload  an Valid Image");window.location ="../full-time-job.php";</script>'; 
            
        }
    } 

  $update_qry="insert into members (name,email,phone_number,address,adhar_no,pic,create_at) values ('$name','$email','$mobile_number','$address','$adhar_number','$pic',now())";

$obj=Common::InsertData($update_qry);
if($obj==true){ 
      header('Location:../full-time-job.php?submit=success');
}
else{
    echo mysql_error();
}




}



}

if(isset($_POST['complete_profile'])){

	$ob=new CompleteProfile;
	$ob->updateprofile();
}


if(isset($_POST['submit_contact_us'])){

    $ob=new CompleteProfile;
    $ob->contactus();
}


if(isset($_POST['member_submit'])){

    $ob=new CompleteProfile;
    $ob->member_add();
}




?>