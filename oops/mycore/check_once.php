<?php
if (isset($_GET['id'])) {
ob_start();
include "config.php";
$id = $_GET['id'];
$query = "SELECT name, type, size, content FROM upload WHERE id = '$id'";
$result = mysql_query($query) or die('Error-> query failed');
list($name, $type, $size,$content) = mysql_fetch_array($result);
header('Content-Type:imagejpeg(image)');
header("Content-Type:image/jpeg");
header("Content-Type:application/pdf");
header('Content-Length:'. $size);
header('Content-Type:'. $type);
header('Content-Disposition: attachment; filename="'.$name.'"');
echo $content;
ob_clean();
flush();
/* Will output the file itself */
$chunksize = 1*(1024*1024); //you may want to change this
if ($type = fopen($type, 'r'))
{
while(!feof($type) )
{
$buffer = fread($type, $chunksize);
print($buffer); //echo($buffer); // can also possible
}
flush();
fclose($type);
}
}
else{
echo "dodo"."<br>";
}
?>
<a href = "upload.php">Upload view</a><br><br>
<html>
<body>
<?php
include "config.php";
$query = "SELECT * FROM upload WHERE id";
$result = mysql_query($query) or die('Error::, query failed');
if (mysql_num_rows($result) == 0) {
echo "Database is empty <br>";
} 
else {
while (list($id, $name) = mysql_fetch_array($result)) {
?>
<a href="Download.php?id=<?php echo urlencode($id); ?>"> <?php echo urlencode($name); ?></a> <br>
<?php
}
}
?>
</body>
</html>