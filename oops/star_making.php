

<?php 
//form_input('name');
//form_input('name','Name');
for($i=0;$i<=5;$i++){

	echo str_repeat('*',$i)."<br>";
}
// star making left side 

for($i=0;$i<=5;$i++){
for($j=$i;$j<5;$j++){
	echo str_repeat('&nbsp;',$j);
//echo "&nbsp;&nbsp;";
}
	echo str_repeat('*',$i)."<br>";
}


?>