<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>
<table>
	<th style="background-color: grey;">While
	<td style="padding-right: 30px;">
		<?php 
			$x = 1;
			//repeated conditional checking

			//while loop
			while ($x <= 10) { //condition
				echo "Hi there<br>"; //result when met
			$x++; //increment operator
		}

 		?>
	</td>
	</th>
	
	<th style="background-color: grey;">Do While
	<td style="padding-right: 30px;">
		<?php 
			$x = 5;
			do {
				echo "Mate ".$x, "<br>"; //result when met
			$x++; //increment operator
			}
			while ($x <= 10);
 		?>
	</td>
	</th>
	
	<th style="background-color: grey;">For While
	<td style="padding-right: 30px;">
		<?php 
			for ($x=0; $x <= 10 ; $x++) { //Three variables, start, finish condition, incr/decr operator
				echo "It's ", $x, "<br>"; //output code while loop conditions are met
			}
 		?>
	</td>
	</th>

	<th style="background-color: grey;">Foreach
	<td style="padding-right: 30px;">
		<?php 
		$array = array("Daniel","Ben","Jett", "John", "Mariane"); //array data

			foreach ($array as $loopdata) { //parse through and output array datum
				echo "My name is ".$loopdata, "<br>"; //output code while conditions are met
			}
 		?>
	</td>
	</th>

</table>

</body>
</html>