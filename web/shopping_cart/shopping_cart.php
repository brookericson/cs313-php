<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
                <title>Shopping Cart</title>
                <link rel="stylesheet" href="/css/style.css">
                <!-- Latest compiled and minified CSS -->
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
                <!-- jQuery library -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                <!-- Latest compiled JavaScript -->
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
            <main>
		<h4>Your Shopping Cart:</h4>
                <ul>
		<?php
     
                if(isset($_SESSION['items'])) {
                    $items = $_SESSION['items'];
                        foreach($items as $item){
                        $prices = $_SESSION['price'];
                        $array = $_SESSION['items'];
                        $index = array_search($item, $array);
                        echo "<li>$item <a href='index.php?action=deleteItem&type=$index'>Remove Item</a></li>"; 
                    }
                }
		?>
                </ul>
                <a href="index.php" class="btn btn-default">Go back to shopping</a>
                <a href="index.php?action=checkOut" class="btn btn-danger">Continue to checkout</a>
            </main>
</body>
</html>
