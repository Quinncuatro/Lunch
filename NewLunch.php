<!--New Lunch Spot // Henry Quinn // 06/01/2015-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>New Lunch Spot</title>
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
        <label class="col-sm-2 control-label">Rating:</label>
                <div class="col-sm-3">
                        <div data-toggle="buttons">
                                <div class="btn-group">
                                        <label class="btn btn-primary">
                                                <input type="radio" name=“Rating” id=“Rating” value="1" required>1
                                        </label>
					<label class="btn btn-primary">
                                                <input type="radio" name=“Rating” id=“Rating” value=“2” required>2
                                        </label>
					<label class="btn btn-primary">
                                                <input type="radio" name=“Rating” id=“Rating” value=“3” required>3
                                        </label>
					<label class="btn btn-primary">
                                                <input type="radio" name=“Rating” id=“Rating” value=“4” required>4
                                        </label>
					<label class="btn btn-primary">
                                                <input type="radio" name=“Rating” id=“Rating” value=“5” required>5
                                        </label>
                                </div>
                        </div>
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
	<label class="col-sm-2 control-label">Distance In Blocks:</label>
		<div class="col-sm-3">
			<div data-toggle="buttons">
	                	<div class="btn-group">
					<label class="btn btn-primary">
                				<input type="radio" name="Distance" id="Distance" value="1" class="sr-only" required>1
                			</label>
                			<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="2" class="sr-only" required>2
                			</label>
					<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="3" class="sr-only" required>3
                			</label>
                			<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="4" class="sr-only" required>4
                			</label>
					<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="5" class="sr-only" required>5
                			</label>
                			<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="6" class="sr-only" required>6
                			</label>
					<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="7" class="sr-only" required>7
                			</label>
                			<label class="btn btn-primary">
                        			<input type="radio" name="Distance" id="Distance" value="8" class="sr-only" required>8
                			</label>
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

<span id="result"></span>

<!--End Page Body-->
</div>

</font>
</div>
</body> 
</html>
