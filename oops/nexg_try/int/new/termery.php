<?php
function cmp($a, $b)
{
    if (strtotime($a) == strtotime($b)) {
        return 0;
    }
    return (strtotime($a) < strtotime($b)) ? -1 : 1;
}

$a = array('11-02-2015', '12-02-2016', '18-01-2013','09-09-2014');

usort($a, "cmp");

foreach ($a as $key => $value) {
    echo "$value"."<br>";
}

//echo date('d-m-y h:i:s');
?>
