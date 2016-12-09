<?php
// Delimiters may be slash, dot, or hyphen
$pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
$pieces = split("", $pizza);
print_r($pieces);

?>