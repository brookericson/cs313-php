<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>02 Teach: Team Activity</title>
		
		<!-- link to external css -->
		<link href="css/activity-1.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQery library -->
		<script src="js/jquery-3.1.1.min.js"></script>
		
		<!-- javascript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/javascript.js"></script>
	
	</head>
	<body>
		<div class="container-fluid">
			<div id="div1" class="col-sm-4">A</div>
			<div id="div2" class="col-sm-4">B</div>
			<div id="div3" class="col-sm-4">C</div>
		</div>
		
		<div id="buttons-box">
			<div class="input-group">
				<input type="text" id="color" class="form-control" placeholder="Enter a color">
				<div class="input-group-btn">
					<button id="colorButton" class="btn btn-default" type="submit" >Change color</button>
				</div>
			</div>

			<button value="Click Me" onclick="clickedFunction()" class="btn btn-default">Click Me</button>
			<button id="toggle" class="btn btn-default">Toggle div</button>			
		</div>
	</body>
</html>
	
	