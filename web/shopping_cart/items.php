<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <title>Grocery Items</title>
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
        <form action='index.php?action=addItem' method='post'>
            <table class="table-striped table-bordered">
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                <tr><?php if(isset($_SESSION['name'])){
                                            $names = $_SESSION['name'];
                                            $prices = $_SESSION['price'];

                                    foreach ($names as $key => $name) {

                                    echo 

                                    "<tr>
                                        <td><input type='checkbox' name='name[]' value='$name' id='$name'><label> $name</lable></td>
                                        <td>\$$prices[$key]</td>
                                        <td><input type='hidden' name='cost' value='$prices[$key]' id='$prices[$key]'></td>
                                    </tr>"; }; } ?>
                    
                                    </table>
                                    <input type='submit' value='Add items to cart' class="btn btn-danger">
                                    <a href="index.php?action=showCart" class="btn btn-primary">My Shopping Cart</a>
                                    </form>
                                    
        </main>
    </body>
</html>