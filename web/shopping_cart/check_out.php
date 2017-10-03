<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
                <title>Checkout</title>
                <link rel="stylesheet" href="css/style.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
            <main>
		<h4>Checkout:</h4>
                <form action="<?php echo htmlspecialchars("index.php?action=makePurchase");?>" method="post" class="form-group">
                    <label>First Name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                    <label>Last Name:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                    <label>Address:</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                    <label>City:</label>
                    <input type="text" name="city" id="city" class="form-control" required>
                    <label>State:</label>
                    <input type="text" name="state" id="state" class="form-control" required>
                    <label>Zip Code:</label>
                    <input type="text" name="zipcode" id="zipcode" class="form-control" required>
                    <input type="submit" value="Complete Purchase" class="form-control btn btn-danger">
                </form>
                <a href="index.php?action=showCart" class="btn btn-default">Go back to shopping cart</a>
            </main>   
</body>
</html>
