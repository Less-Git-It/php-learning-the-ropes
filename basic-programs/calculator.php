<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<form>
	<input type="text" name="num1" placeholder="Constant">
	<input type="text" name="num2" placeholder="Constant">
	<select name="Operator">
		<option>Select Option</option>
		<option>Add</option>
		<option>Subtract</option>
		<option>Multiply</option>
		<option>Divide</option>
	</select>
	<br>
	<br>
	<button type="Submit" name="Submit" value="Submit">Calculate</button>
</form>

<p><b>The answer is:</b>
<?php 
	if (isset($_GET['Submit'])) {
		$result1 = $_GET['num1'];
		$result2 = $_GET['num2'];

		if ($result1 == 0 && $result2 == 0) {
			echo "Cannot divide by 0!"; }

		elseif (isset($_GET['Submit'])) {
			$result1 = $_GET['num1'];
			$result2 = $_GET['num2'];
			$operator = $_GET['Operator'];
				switch ($operator) {
					case 'Select Option':
						echo "Error";
						break;
					case 'Add':
						echo $result1 + $result2;
						break;
					case 'Subtract':
						echo $result1 - $result2;
						break;
					case 'Multiply':
						echo $result1 * $result2;
						break;
					case 'Divide':
						echo $result1 / $result2;
						break;
}}}

 ?>
</p>

</body>
<html>
