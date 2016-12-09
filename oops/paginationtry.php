<?php
mysql_connect("localhost","root","");
mysql_select_db("zendframework");
$perpage="5";
$query=mysql_query("select * from album ");
$totaldata=mysql_num_rows($query);
echo $totaldata;


?>