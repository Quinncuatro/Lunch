<?php
require '../config/config_insert.php';
require 'CleanInput.php';

echo "$Name - $Cuisine - $Rating - $Price";

$link = mysqli_connect("localhost",$username,$password,$database,3306);

$query1 = "INSERT INTO restaurants (name, cuisine, price)
VALUES('$Name','$Cuisine','$Price')";

$result1 = mysqli_query($link, $query1) or die(Mysqli_error($link));

mysqli_close($link);
?>
