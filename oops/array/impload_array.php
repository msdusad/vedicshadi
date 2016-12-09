<?php
$array = Array(
  'foo' => 5,
  'bar' => 12,
  'baz' => 8
);
//my try
$arr=array();
foreach($array as $name=>$ouput){
    $arr[]="$name val ($ouput)";
}
	echo 'Our Result='.implode(',',$arr);
// first method
$list = array();
foreach ($array as $key => $value) {
  $list[] = "$key ($value)";
}
echo 'The values are: '.implode(', ',$list);
// second method
function array_map_assoc( $callback , $array ){
  $r = array();
  foreach ($array as $key=>$value)
    $r[$key] = $callback($key,$value);
  return $r;
}
echo implode(',',array_map_assoc(function($k,$v){return "$k ($v)";},$array));
?>