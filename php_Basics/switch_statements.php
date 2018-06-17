<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<?php 

//variable
$x = 3;

//conditional statements
switch ($x) { //select the variable to parse
	case 1: //parsar result one
		echo "The answer is one";
		break; //ending the case
	case 2: //two..
		echo "The answer is two";
		break;
	case 3: //and so on...
		echo "The answer is three";
		break;
	case 4:
		echo "The answer is four";
		break;
	
	default: //if the switch varible isnt parsing with above cases... return this
		echo "There is no answer"; //default return code
		break;
}

 ?>

</body>
</html>