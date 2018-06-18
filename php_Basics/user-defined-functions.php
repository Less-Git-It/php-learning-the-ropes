<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<?php 

//variables
$x = 4564;
$a = 30;

	function newCalc($x) { //creating the function and it's handling variable
		$newNum = $x * 0.75; //code to run when function is called
		echo "75% of ".$x, " is ".$newNum, "<br>";
	}

newCalc($x); //calling the function
newCalc($a); //calling the function with a new variable

/*Define function at the top of document to avoid conflicts

 ?>

</body>
</html>