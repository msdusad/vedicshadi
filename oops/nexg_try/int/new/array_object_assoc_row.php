<?php
mysql_connect("localhost","root","");
mysql_select_db("antimsan");
$result = mysql_query("SELECT * from ads");
while($row = mysql_fetch_row($result))
{
     echo $row['1']."<br>";

}
echo "<hr>";


$result = mysql_query("SELECT * from ads");
while($row = mysql_fetch_assoc($result))
{
     echo $row['id']."<br>";

}
echo "<hr>";


$result = mysql_query("SELECT * from ads");
while($row = mysql_fetch_object($result))
{
     echo $row->name."<br>";

}
echo "<hr>";

$result = mysql_query("SELECT * from ads");
while($row = mysql_fetch_array($result))
{
     echo $row['id']."<br>";
echo $row['1']."<br>";
}
echo "<hr>";
