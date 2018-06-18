<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<p>
<?php 
	
	$dayofweek = date("w");
	
	switch ($dayofweek) {
		case 0:
			echo "<p>It's Sunday :P</p>";
			break;
		case 1:
			echo "It's Monday D:";
			break;
		case 2:
			echo "<p>It's Tuesday :(</p>";
			break;
		case 3:
			echo "<p>It's Wednesday :P</p>";
			break;
		case 4:
			echo "<p>It's Thursday :)</p>";
			break;
		case 5:
			echo "<p>It's Friday ;)</p>";
			break;
		case 6:
			echo "<p>It's Saturday :D</p>";
			break;
	}

 ?>
</p>
</body>
</html>