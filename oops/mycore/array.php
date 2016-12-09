<?php

if(!defined('add-sub.php')){
	echo "File Not Incuded on this page yet<br>";

}


$arr = array('Name' =>  array('First','Second','Third' ),'Age'=> array('10','20','30'));


foreach ($arr as $key => $value) {
	echo "<br><b>".$key."</b><br>";
		foreach ($value as $keys => $values) {
			echo $values."<br>";
		}
}

?>