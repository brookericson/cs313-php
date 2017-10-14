<?php 

session_start();

try
	{
	  $user = 'postgres';
	  $password = 'Flatirons11';
	  $db = new PDO('pgsql:host=127.0.0.1;dbname=quotes', $user, $password);
	}
catch (PDOException $ex)
	{
	  echo 'Error!: ' . $ex->getMessage();
	  die();
	}

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
  $action = 'home';
  }
}

// Get the quotes model for use as needed
require_once 'model/quotes_model.php';

switch ($action){
  case 'home':
		include 'home.php';
		break;
  case 'quotes': 
      include 'quotes.php';
      break;
  case 'account': 
      include 'account.php';
      break;
   case 'login': 
      include 'login.php';
      break;
  case 'findByCategory':
      $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
	  $quotes = getQuotesByCategory($category_id);
	  include 'quotes.php';
	  break;
   case 'findByAuthor':
      $author_id = filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_NUMBER_INT);
	  $quotes = getQuotesByAuthor($author_id);
	  include 'quotes.php';
	  break;
	case 'manageQuotes':
	  include 'manage_quotes.php';
	  break; 
	case 'updateQuote':
	  $quoteId = filter_input(INPUT_GET, 'quote', FILTER_VALIDATE_INT);
	  $quoteInfo = getQuoteInfo($quoteId);
	  include 'update_quotes.php';
	  break;
	case 'addQuote':
	  include 'add_quote.php';
	   break;
}

?>
		
	 