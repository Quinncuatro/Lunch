<?php
require '../config/config_select.php';
require 'CleanInput.php';

$link = mysqli_connect("localhost",$username,$password,$database,3306);

$query1 = "SELECT * FROM restaurants WHERE (Cuisine = '$Cuisine') OR (Rating >= '$Rating') OR (Price <= '$Price') OR (Distance <= '$Distance') ORDER BY Name, Rating, Price, Distance";

$result1 = mysqli_query($link, $query1) or die(Mysqli_error($link));

mysqli_close($link);
?>
