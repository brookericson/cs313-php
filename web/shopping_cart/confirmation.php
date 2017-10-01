<!DOCTYPE html>
<html lang="en-us">
	<head>
		<meta charset="utf-8">
                <title>Purchase Confirmation</title>
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
                <?php if(isset($_SESSION['display'])) { echo $_SESSION['display'];} ?>
            
		<h4>Items Purchased:</h4>
                <ul>
		<?php
     
                if(isset($_SESSION['items'])) {
                    $items = $_SESSION['items'];
                    $prices = $_SESSION['price'];
                        foreach($items as $item){
                        $array = $_SESSION['items'];
                        $index = array_search($item, $array);
                        echo "<li>$item</li>"; 
                    }
                }
		?>
                </ul>
                <a href="index.php" class="btn btn-default">Return to shopping list items</a>
            </main>
        </body>
</html>
