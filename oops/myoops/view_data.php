<?php
require_once('fetch_data.php');
foreach($val as $output){
echo $output['first_name']." ".$output['last_name']."<br>";
}
?>