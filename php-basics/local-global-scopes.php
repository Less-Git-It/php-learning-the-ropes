<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<?php 

$x = 5; //global scope anything can manipulate, can be called in functions

function something() {
	$y = 10; //local scope only function can play with variable, nothing outside
	echo "<br>".$y;
}

echo $x;
something()
 ?>

</body>
</html>