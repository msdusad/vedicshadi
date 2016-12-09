<?php
mysql_connect("localhost","root","") or die('Can not create a location');
mysql_select_db("antimsan") or die('db not selected');
$query=mysql_query("select user_id,username from user order by user_id asc");
$details=array();
while($row=mysql_fetch_assoc($query)){

$details[]=array('detail'=>$row);

}
header('Content-type:text/xml');
echo "<output>";
foreach($details as $out=>$val){

if(is_array($val)){
foreach($val as $sec=>$secval){
echo "<".$sec.">";
if(is_array($secval)){

foreach($secval as $finalkey=>$finalout){
echo '<'.$finalkey.'>'.$finalout.'</'.$finalkey.'>';

}

}
echo "</".$sec.">";
}
}
}
echo "</output>";
