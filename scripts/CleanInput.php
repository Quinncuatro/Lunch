<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$Distance = test_input($_POST['Distance']);
	$Cuisine = test_input($_POST['Cuisine']);
	$Price = test_input($_POST['Price']);
}

function test_input($input) {
	$input = trim($input);
	$input = stripslashes($input);
	$input = htmlspecialchars($input);
	return $input;
}
?>
