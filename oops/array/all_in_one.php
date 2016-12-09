<?php

$arr=array('12','3','8','4','67');
$arr12=array('2','3','8','lal','ss');
//sort($arr);

$merge=array_merge($arr,$arr12);
print_r($merge);
echo "<br>";
$combine=array_combine($arr,$arr12);
print_r($combine);
echo "<br>";
$diff_assoc=array_diff_assoc($arr,$arr12);
print_r($diff_assoc);

echo "<br>";
$arr_intersect=array_intersect($arr,$arr12);
print_r($arr_intersect);
$arr1=count($arr_intersect);
for($x=0;$x<$arr1;$x++){
//echo $arr[$x]/4."<br>";
}

echo "<br> divide by 3 array";
$input_array = array('9', '5', '6', '7');
$arrays = array_chunk($input_array, 1);
print_r($arrays);
// foreach ($arrays as $array_num => $array) {
//   echo "Array $array_num:\n";
//   foreach ($array as $item_num => $item) {
//    // echo "  Item $item_num: $item\n";
//   }
// }