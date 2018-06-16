<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>
	<form method="GET"> <!--User Input -->
		<input type="text" name="Person">
		<input type="text" name="Age">
		<button>SUBMIT</button>
	</form>
<?php 

//Defining variables
$name = $_GET['Person'];
$age = $_GET['Age'];

//Printing the form result
echo $name." is your name! Are you are " ,$age. " years old :)";


 ?>
</body>
</html>