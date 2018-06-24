<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<?php 

/*
$GLOBALS -- sets a global value in a local scope
$_POST -- captures, hides values from URL but can be called
$_GET -- captures, display values in URL
$_COOKIE
$_SESSION
 */

$x = 5;

//global
function something() {
	$y = 10; 
	echo $GLOBALS['x'];
}

echo $_GET['name']; //displaying a GET value

setcookie("name", "Daniel", time() + 86400);

 ?>

 <form method="GET">
 	<input type="hidden" name="name" value="value">
 	<button type="submit">Press Me</button>
 </form>

 <br><br>


</body>
</html>