<?php session_start(); ?>
<!doctype html>
<html>
<head>
<title>Grocery Items</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<h4>Choose items for your grocery cart</h4>

<form action="cart.html" method="POST">

<fieldset>
	<legend>Produce</legend>

	<div>
		<input type="checkbox" name="item[]" value="Red Delicious Apples"><label>Red Delicious Apples</label>
	</div>

	<div>
	<input type="checkbox" name="item[]" value="Bananas"><label>Bananas</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="Peaches"><label>Peaches</label>
	</div>
	
</fieldset>
	
<fieldset>
	<legend>Vegetables</legend>
	<div>
	   <input type="checkbox" name="item[]" value="Tomatoes"><label>Tomatoes</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="Russet Potatoes"><label>Potatoes</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="Green Bell Peppers"><label>Green Bell Peppers</label>
	</div>
</fieldset>
	
<fieldset>
	<legend>Dairy</legend>
	<div>
	   <input type="checkbox" name="item[]" value="milk"><label>Skim Milk</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="chocolate_milk"><label>Chocolate Milk</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="Cheddar Cheese"><label>Cheddar Cheese</label>
	</div>
</fieldset>
	
<fieldset>
	<legend>Grains</legend>
	<div>
	   <input type="checkbox" name="item[]" value="bread"><label>1 Loaf Whole Wheat Bread</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="rice"><label>Rice</label>
	</div>

	<div>
	   <input type="checkbox" name="item[]" value="pasta"><label>Pasta Noodles</label>
	</div>
</fieldset>

    <input type="submit" value="View My Cart">

</form>

</body>
</html>