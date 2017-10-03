<?php 

session_start();

$_SESSION['items'];
$itemsArray = array();

$_SESSION["name"] = array(
                                                    "apple" => "Red Delicious Apple",
                                                    "banana" => "Banana",
                                                    "tomato" => "Tomato",
                                                    "potato" => "Russet Potato",
                                                    "milk" => "1 gal. 2% Milk",
                                                    "cheese" => "8 oz Cheddar Cheese",
                                                    "bread" => "Whole Wheat Loaf of Bread",
                                                    "rice" => "18 oz White Rice"
                                              );

$_SESSION["price"] = array(
                                                    "apple" => 0.75,
                                                    "banana" => 0.35,
                                                    "tomato" => 0.35,
                                                    "potato" => 0.30,
                                                    "milk" => 2.25,
                                                    "cheese" => 2.40,
                                                    "bread" => 2.20,
                                                    "rice" => 1.00
                                              );

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
  $action = 'home';
  }
}

switch ($action){
  case 'home':
    include 'items.php';
    break;
  case 'addItem':
      $items = $_POST['name'];
      foreach ($items as $item){
      array_push($itemsArray, $item);
      }
	  $_SESSION['items'] = $itemsArray;
      $_SESSION['message'] = '<p>Your items have been added</p>';
      include 'items.php';
      break;
  case 'showCart': 
      include 'shopping_cart.php';
      break;
  case 'deleteItem':
      $index = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_NUMBER_FLOAT);
      $index2 = 1 + $index;
      array_splice($_SESSION['items'], $index, $index2);
      include 'shopping_cart.php';
      break;
  case 'checkOut':
      include 'check_out.php';
      break;
  case 'makePurchase':
      $firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING);
      $lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING);
      $address = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING);
      $city = filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING);
      $state = filter_input(INPUT_POST, 'state', FILTER_SANITIZE_STRING);
      $zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_NUMBER_INT);
      $_SESSION['display'] = "<h4>$firstname, your order is complete!</h4>"
              . "<p>Your order will be sent to:</br>"
              . "$address, $city, $state $zipcode<p>";
      include 'confirmation.php';
      break;
}