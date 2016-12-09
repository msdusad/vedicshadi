<?php
//db connection

mysql_connect("localhost","root","") or die('cant connect to the server');
mysql_select_db("vin") or die('db not selected');

// for create table
//CREATE TABLE category(category_id INT AUTO_INCREMENT PRIMARY KEY,name VARCHAR(20) NOT NULL,parent INT DEFAULT NULL);

// for data insert into table
//mysql_query("INSERT INTO category VALUES(1,'ELECTRONICS',NULL),(2,'TELEVISIONS',1),(3,'TUBE',2),(4,'LCD',2),(5,'PLASMA',2),(6,'PORTABLE ELECTRONICS',1),(7,'MP3 PLAYERS',6),(8,'FLASH',7),(9,'CD PLAYERS',6),(10,'2 WAY RADIOS',6)");

// fetching data in levels
//RETRIEVING A FULL TREE
echo "<table>

<thead>
<th>Level1</th>
<th>Level2</th>
<th>Level3</th>
<th>Level4</th>
</thead>

";
$qry=mysql_query("SELECT t1.name AS lev1, t2.name as lev2, t3.name as lev3, t4.name as lev4
FROM category AS t1
LEFT JOIN category AS t2 ON t2.parent = t1.category_id
LEFT JOIN category AS t3 ON t3.parent = t2.category_id
LEFT JOIN category AS t4 ON t4.parent = t3.category_id
WHERE t1.name = 'ELECTRONICS'");
while($row=mysql_fetch_array($qry)){
echo "<tr><td>".$row['lev1'] ."</td>";
echo "<td>".$row['lev2'] ."</td>";
echo "<td>".$row['lev3'] ."</td>";
echo "<td>".$row['lev4'] ."</td></tr>";
}
echo"</table>";

//FINDING ALL THE LEAF NODES

$qry=mysql_query("SELECT t1.name FROM
category AS t1 LEFT JOIN category as t2
ON t1.category_id = t2.parent
WHERE t2.category_id IS NULL");	


//RETRIEVING A SINGLE PATH

$qry=mysql_query("SELECT t1.name AS lev1, t2.name as lev2, t3.name as lev3, t4.name as lev4
FROM category AS t1
LEFT JOIN category AS t2 ON t2.parent = t1.category_id
LEFT JOIN category AS t3 ON t3.parent = t2.category_id
LEFT JOIN category AS t4 ON t4.parent = t3.category_id
WHERE t1.name = 'ELECTRONICS' AND t4.name = 'FLASH';");


//The Nested Set Model

//CREATE TABLE nested_category (category_id INT AUTO_INCREMENT PRIMARY KEY, name VARCHAR(20) NOT NULL,lft INT NOT NULL,rgt INT NOT NULL);

//INSERT INTO nested_category VALUES(1,'ELECTRONICS',1,20),(2,'TELEVISIONS',2,9),(3,'TUBE',3,4),(4,'LCD',5,6),(5,'PLASMA',7,8),(6,'PORTABLE ELECTRONICS',10,19),(7,'MP3 PLAYERS',11,14),(8,'FLASH',12,13),(9,'CD PLAYERS',15,16),(10,'2 WAY RADIOS',17,18);

//$qry=mysql_query("SELECT * FROM nested_category ORDER BY category_id");

//RETRIEVING A FULL TREE Nested Model

$qry=mysql_query("SELECT node.name
FROM nested_category AS node,
        nested_category AS parent
WHERE node.lft BETWEEN parent.lft AND parent.rgt
        AND parent.name = 'ELECTRONICS'
ORDER BY node.lft;");

//RETRIEVING A SINGLE PATH

$qry=mysql_query("SELECT parent.name
FROM nested_category AS node,
        nested_category AS parent
WHERE node.lft BETWEEN parent.lft AND parent.rgt
        AND node.name = 'FLASH'
ORDER BY parent.lft;");

?>
