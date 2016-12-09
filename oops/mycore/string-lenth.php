<?php
$str="mahender singh dusad.";
echo strpos($str,'singh')."<br>";
echo ucfirst($str)."<br>";
echo ucwords($str)."<br>";
print_r(str_word_count($str));
echo "<br>";
print_r(str_word_count($str,1,'.'));	
echo "<br>";
echo str_shuffle($str)."<br>";
echo strlen($str)."<br>";
echo substr($str,9)."<br>";	
echo strrev($str)."<br>";	
$first="my name is mahender";
$sec="my name Is Mahender";
similar_text($first, $sec,$th)."<br>";	
echo $th."%";
?>
