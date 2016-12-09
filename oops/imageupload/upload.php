<?php
 class upload{

public static function uploadfiles(){
	$filename=$_FILES['profilepic']['name'];
	$filetmp=$_FILES['profilepic']['tmp_name'];
	move_uploaded_file($filetmp, "docs/".$filename);
	return true;
}

}