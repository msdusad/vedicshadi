<?php
$input_array = array("FirSt" => 1, "SecOnd" => 4);
$second=array('FirSt'=>9,'again'=>8);
$t=array_combine($input_array,$second);
print_r($t);
//print_r(array_change_key_case($input_array,CASE_UPPER));
?>
