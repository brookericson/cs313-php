<!DOCTYPE html>
<html>
	<head>
		<?php include $_SERVER['DOCUMENT_ROOT'].'/-cs313/web/quotes/modules/head.php'; ?>
	</head>
	<body>
		<header>
			<?php include $_SERVER['DOCUMENT_ROOT'].'/-cs313/web/quotes/modules/header.php'; ?>
		</header>
		<main>
			<div>
				<h1>Account Information:</h1>
				<?php if(isset($_SESSION['userData'])) {
				echo "<p>Name: ";
				echo $_SESSION['userData']['user_name'];
				echo "</p>";
				echo "<p>User Type: ";
				echo $_SESSION['userData']['type'];
				echo '</p>';
				echo "<p>Email: ";
				echo $_SESSION['userData']['email'];
				echo "</p>";
				} ?>
			</div>
			<?php if($_SESSION['userData']['type'] == 1){
				echo '<div>';
				echo '<a href="index.php?action=manageQuotes" class="btn btn-primary">Manage Quotes</a>';
				echo '</div>';
			}	
			?>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>