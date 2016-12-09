<?php 
$string = "My Name Is Junaid";
$len = strlen($string);
for($i=$len; $i > 0; $i--){
    echo $string[$i-1];
}
