<html>
<body>
	<title>Factorial Program in PHP</title>
	<!-- form post method -->
	<form action="" method="post">
		<label>Enter Number to calculate Factorial</label> <input type="text" name="number" />
<input type="submit" value="Get Factorial">
	</form>
</body>
</html>
 
<?php 
	//check for post value if there then allow inside
	if($_POST){
		
		$fact = 1;
		
		//get the value from input text box 'number'
		$number = $_POST['number'];
		
		echo "Factorial of $number:<br><br>";
		
		//loop till the iterator $i equals to $number
		for ($i = 1; $i <= $number; $i++){
			
			//formula to calculate factorial is to 
			//multiply the iterator $i value with $fact value.			
			$fact = $fact * $i;
			
			//print $fact to show the factorial pyramid
			//or put this line out of this 'for loop' to show only the total value
			print $fact . "<br>";
		}
	}

$number = 6;
$factorial = 1;
 
do {
  $factorial *= $number;
  $number = $number - 1;
} while ($number > 0);
echo "Second Loop Output : ".$factorial;

$fact1 = gmp_fact(5); // 5 * 4 * 3 * 2 * 1
echo "Third Logic".gmp_strval($fact1) . "\n";
 
?>
