<?php 

session_start();

// Get the quotes model for use as needed
require_once 'connect.php';
// Get the quotes model for use as needed
require_once 'quotes_model.php';

$db = get_db();

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL){
  $action = filter_input(INPUT_GET, 'action');
if($action == NULL){
  $action = 'home';
  }
}

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
	case 'Login':
	  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	  if (empty($email) || empty($password)) {
		  $_SESSION['message'] = '<p>Please provide a valid email address and password.</p>';
		  include 'login.php';
		  exit;
      }
	  $userData = getUserData($email);
	  $_SESSION['loggedin'] = TRUE;
	  $_SESSION['userData'] = $userData;
	   include 'account.php';
	  break;
	case 'logout':
		session_destroy();
		header('Location: http://localhost/-cs313/web/quotes/index.php');
		break;
	case 'signup':
		include 'signup.php';
		break;
	case 'Signup':
	  $type = filter_input(INPUT_POST, 'type', FILTER_SANITIZE_STRING);
	  $username = filter_input(INPUT_POST, 'user_name', FILTER_SANITIZE_STRING);
	  $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
	  $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
	  if (empty($email) || empty($password) || empty($username)) {
		  $$_SESSION['message'] = '<p>Please fill in each input field.</p>';
		  include 'signup.php';
		  exit;
      }
	  $rowsChanged = insertUserData($username, $email, $password, $type);
		if ($rowsChanged == 0) {
		  $$_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'signup.php';
		  exit;
		}
	  $userData = getUserData($email);
	  $_SESSION['loggedin'] = TRUE;
	  $_SESSION['userData'] = $userData;
	  include 'account.php';
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
	  $quote_id = filter_input(INPUT_GET, 'quote_id', FILTER_VALIDATE_INT);
	  $quoteInfo = getQuoteInfo($quote_id);
	  $_SESSION['quoteInfo'] = $quoteInfo;
	  include 'update_quotes.php';
	  break;
	case 'UpdateQuote':
	  $quote_id = filter_input(INPUT_POST, 'quote_id', FILTER_SANITIZE_NUMBER_INT);
	  $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
	  $authorid = filter_input(INPUT_POST, 'authorid', FILTER_SANITIZE_NUMBER_INT);
	  $quote = filter_input(INPUT_POST, 'quote', FILTER_SANITIZE_STRING);
	  $rowsChanged = updateQuote($quote_id, $category_id, $authorid, $quote);
	  if ($rowsChanged < 1) {
		  $message = '<p>There was an error, please try again.</p>';
		  include 'update_quote.php';
		  exit;
	    }
		$_SESSION['message'] = '<p>The quote has successfully updated</p>';	 
	  	include 'manage_quotes.php';
	  	break;
	case 'addQuote':
	  include 'add_quote.php';
	   break;
	case 'createQuote':
	 	 $category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
		 $authorid = filter_input(INPUT_POST, 'authorid', FILTER_SANITIZE_NUMBER_INT);
		 $quote = filter_input(INPUT_POST, 'quote', FILTER_SANITIZE_STRING);
	  	if (empty($category_id) || empty($authorid) || empty($quote)) {
		  $_SESSION['message'] = '<p>Please fill in each input field.</p>';
		  include 'add_quote.php';
		  exit;
      	}
		$rowsChanged = insertNewQuote($category_id, $authorid, $quote);
		if ($rowsChanged == 0) {
		  $_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'add_quote.php';
		  exit;
		}
	  	$message = '<p>The quote has successfully been added</p>';	 
	  	include 'manage_quotes.php';
	  	break;
	case 'addCategory':
	  include 'add_category.php';
	   break;
	case 'createCategory':
	   $category_name = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
	  if (empty($category_name)) {
		  $_SESSION['message'] = '<p>Please fill in each input field.</p>';
		  include 'add_category.php';
		  exit;
      }
	  $rowsChanged = insertNewCategory($category_name);
		if ($rowsChanged == 0) {
		  $_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'add_category.php';
		  exit;
		}
	  $message = '<p>'.$category_name.' has successfully been added</p>';	 
	  include 'manage_quotes.php';
	  break;
	case 'updateCategory':
		  $category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
		  $categoryInfo = getCategoryInfo($category_id);
		  $_SESSION['categoryInfo'] = $categoryInfo;
		  include 'update_category.php';
		  break;
	case 'UpdateCategory':
	  	$category_id = filter_input(INPUT_POST, 'category_id', FILTER_SANITIZE_NUMBER_INT);
	  	$category_name = filter_input(INPUT_POST, 'category_name', FILTER_SANITIZE_STRING);
		$rowsChanged = updateCategory($category_id, $category_name);
	  	if ($rowsChanged < 1) {
		  $_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'update_category.php';
		  exit;
	    }
		$_SESSION['message'] = '<p>The category has successfully updated</p>';
	  	include 'manage_quotes.php';
	  	break;
	case 'addAuthor':
	  include 'add_author.php';
	   break;
	case 'createAuthor':
	  	   $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	  if (empty($name)) {
		  $_SESSION['message'] = '<p>Please fill in the input field.</p>';
		  include 'add_author.php';
		  exit;
      }
	  $rowsChanged = insertNewAuthor($name);
		if ($rowsChanged == 0) {
		  $_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'add_author.php';
		  exit;
		}
	  $message = '<p>'.$name.' has successfully been added</p>';	 
	  include 'manage_quotes.php';
	  break;
	case 'updateAuthor':
		  $author_id = filter_input(INPUT_GET, 'author_id', FILTER_VALIDATE_INT);
		  $authorInfo = getAuthorInfo($author_id);
		  $_SESSION['authorInfo'] = $authorInfo;
		  include 'update_author.php';
		  break;
	case 'UpdateAuthor':
	  	$author_id = filter_input(INPUT_POST, 'author_id', FILTER_SANITIZE_NUMBER_INT);
	  	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
		$rowsChanged = updateAuthor($author_id, $name);
	  	if ($rowsChanged == 0) {
		  $_SESSION['message'] = '<p>There was an error, please try again.</p>';
		  include 'update_author.php';
		  exit;
	    }
		$_SESSION['message'] = '<p>The author has successfully updated</p>';
	  	include 'manage_quotes.php';
	  	break;
	case 'deleteCategory':
		$category_id = filter_input(INPUT_GET, 'category_id', FILTER_VALIDATE_INT);
		$rowsChanged = deleteCategory($category_id);
		if ($rowsChanged < 1) {
				  $message = '<p>There was an error, please try again</p>'; 
			}
		  $_SESSION['message'] = '<p>The category was successfully deleted</p>';	 
		  include 'manage_quotes.php';
		  break;
	case 'deleteAuthor':
		$author_id = filter_input(INPUT_GET, 'author_id', FILTER_VALIDATE_INT);
		$rowsChanged = deleteAuthor($author_id);
		if ($rowsChanged < 1) {
				  $message = '<p>There was an error, please try again</p>'; 
			}
		  $_SESSION['message'] = '<p>The author was successfully deleted</p>';
		  include 'manage_quotes.php';
		  break;
	case 'deleteQuote':
		$quote_id = filter_input(INPUT_GET, 'quote_id', FILTER_VALIDATE_INT);
		$rowsChanged = deleteQuote($quote_id);
		if ($rowsChanged < 1) {
				  $message = '<p>There was an error, please try again</p>'; 
			}
		  $_SESSION['message'] = '<p>The quote was successfully deleted</p>';
		  include 'manage_quotes.php';
		  break;
}
?>
		
	 