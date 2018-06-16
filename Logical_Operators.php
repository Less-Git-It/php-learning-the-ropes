<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Coding'round</title>
</head>
<body>

<?php 

$x = 10;
$z = 10;

if ($x == $z /*logical operator or*/|| 1 == 1) {
	echo "True! ";
} else {
	echo "Nope... "; }

if ($x == $z /*logical operator and*/&& 1 == 1) {
	echo "True! ";
} else {
	echo "Nope... "; }

if ($x == $z /*logical operator exclusive or*/xor 1 != 1) {
	echo "True! ";
} else {
	echo "Nope... "; }


 ?>

</body>
</html>