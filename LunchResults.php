<!--Lunch Results // Henry Quinn // 06/01/2015-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lunch Results</title>
<?php include 'include/Style.php'; ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="jquery-1.11.3.min.js"></script>
</head>
<body>

<!--Bootstrap Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include 'include/LunchResultsHeader.php'; ?>
<br>
<div class="page-body">
<font color="#000000">
<div class="col-sm-2"></div>

<table style="width: 50%;" class="table table-hover table-bordered spacer">
	<tr>
		<th>Name</th>
		<th>Cuisine</th>
		<!--<th>Rating</th>-->
		<th>Price</th>
		<!--<th>Distance</th>-->
	</tr>
	<tbody>

<?php
require 'config/config_select.php';
require 'scripts/CleanInput.php';

$link = mysqli_connect("localhost",$username,$password,$database,3306);

$query1 = "SELECT * FROM restaurants WHERE (Cuisine = '$Cuisine') OR (Price <= '$Price') GROUP BY Cuisine, Name, Price";

//$query1 = "SELECT Name FROM restaurants WHERE Cuisine = $Cuisine AND Rating >= $Rating AND Price <= $Price AND Distance <= $Distance";

$result1 = mysqli_query($link, $query1) or die(Mysqli_error($link));

while($row = mysqli_fetch_assoc($result1)){
	echo "<tr>";
	echo "<td>".$row['name']."</td>";
	echo "<td>".$row['cuisine']."</td>";
	//echo "<td>".$row['Rating']."</td>";
	echo "<td>".$row['price']."</td>";
	//echo "<td>".$row['Distance']."</td>";
	echo "</tr>";
	echo "<br>";
}

mysqli_close($link);
?>

	</tbody>
</table>
</font>
</div>
</body>
</html>
