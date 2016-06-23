<!--Lunch Spot Picker // Henry Quinn // 06/01/2015-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lunch Spot Picker</title>
<?php include 'include/Style.php'; ?>
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="jquery-1.11.3.min.js"></script>
</head>
<body>

<!--Bootstrap Scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php include 'include/LunchHeader.php'; ?>
<br>
<div class="page-body">

<!--Start Of Form-->
<form id="LunchPicker" method="post" action="LunchResults.php" class="form-horizontal">
<font color="#000000"> 
  
<div class="form-group">
	<label for="Cuisine" class="col-sm-2 control-label">Type of Food:</label>
		<div class="col-sm-3">
			<select class="form-control" name="Cuisine" id="Cuisine">
				<option value="Burgers">Burgers</option>
				<option value="Mediterranean">Mediterranean</option>
				<option value="Organic/Vegan">Organic/Vegan</option>
				<option value="Pizza">Pizza</option>
				<option value="Salads">Salads</option>
				<option value="Thai">Thai</option>
			</select>
		</div>
</div>

<div class="form-group">
	<div class="form-inline">
    		<label for="Price" class="col-sm-2 control-label">Price:</label>
    		<div class="col-sm-3 input-group">
			&nbsp;&nbsp;&nbsp;
      			<div class="input-group">
				<span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
				<input maxlength=20" class="form-control" name="Price" id="Price" placeholder="Amount" type="text" required>
			</div>
    		</div>
	</div>
</div>

<div class="form-group">
        <label for="Submit" class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                        <button type="submit" class="btn btn-default">Submit</button>
			<input type="button" class="btn btn-default" value="Random" onClick="parent.location='RandomLunch.php'">
                </div>
</div>

</form>

<span id="result1"></span>

<?php include 'include/NewLunchHeader.php'; ?>
<br>

<form id="LunchAddForm" method="post" action="scripts/LunchInput.php" class="form-horizontal">
<font color="#000000">

<div class="form-group">
        <label for="Name" class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-3">
                        <input type="text" class="form-control" placeholder="Thai Cart" name="Name" id="Name" required>
                </div>
</div>

<div class="form-group">
        <label for="Cuisine" class="col-sm-2 control-label">Type of Food:</label>
                <div class="col-sm-3">
                        <select class="form-control" name="Cuisine" id="Cuisine">
                                <option value="Burgers">Burgers</option>
                                <option value="Mediterranean">Mediterranean</option>
                                <option value="Organic/Vegan">Organic/Vegan</option>
                                <option value="Pizza">Pizza</option>
                                <option value="Salads">Salads</option>
                                <option value="Thai">Thai</option>
                        </select>
                </div>
</div>

<div class="form-group">
        <div class="form-inline">
                <label for="Price" class="col-sm-2 control-label">Price:</label>
                <div class="col-sm-3 input-group">
                        &nbsp;&nbsp;&nbsp;
                        <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-usd"></i></span>
                                <input maxlength=20" class="form-control" name="Price" id="Price" placeholder="Amount" type="text" required>
                        </div>
                </div>
        </div>
</div>

<div class="form-group">
        <label for="Submit" class="col-sm-2 control-label"></label>
                <div class="col-sm-3">
                        <button type="submit" class="btn btn-default">Submit</button>
                </div>
</div>

</form>

<span id="result2"></span>

<!--End Page Body-->
</div>

</font>
</div>
</body> 
</html>
