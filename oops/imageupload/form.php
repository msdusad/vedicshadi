<?php
require_once('upload.php');
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="profilepic">
<input type="submit" name="up" value="Upload">

</form>
<?php
if(isset($_POST['up'])){
$a=$_FILES['profilepic']['name'];
     $b="docs/".$_FILES['profilepic']['name'];
    
//move_uploaded_file($_FILES['profilepic']['tmp_name'],$profilepic);
	$obj=upload::uploadfiles();


}
?>