<?php

$array=array('2','4','8','5','1','7','6','9','10','3');

echo "Unsorted array is: ";
echo "<br />";
print_r($array);

for($j = 0; $j < count($array); $j ++) {
    for($i = 0; $i < count($array)-1; $i ++){

        if($array[$i] < $array[$i+1]) {
            $temp = $array[$i+1];
            $array[$i+1]=$array[$i];
            $array[$i]=$temp;
        }       
    }
}

echo "<br><br>Sorted Array Without Pre-define Function is: ";
echo "<br />";
print_r($array);

echo "<br><br>";
for($j=0;$j < count($array);$j++){
for($i=0;$i < count($array)-1;$i++){

if($array[$i]>$array[$i+1]){
$val=$array[$i+1];
$array[$i+1]=$array[$i];
$array[$i]=$val;
}

}

}

echo "Again Sorted<br>";
print_r($array);

?>
