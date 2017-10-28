<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Quotes</title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!-- jQuery library -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default">
				<div class="continer-fluid">
				<ul class="nav navbar-nav">
					<li><a href="index.php?action=home">Home</a></li>				
					<li><a href="index.php?action=quotes">Quotes</a></li>
					<?php if(isset($_SESSION['loggedin'])) {
						echo '<li><a href="index.php?action=account">My Account</a></li>';
						echo '<li><a href="index.php?action=logout">Log Out</a></li>';
						}
						else {
							echo '<li><a href="index.php?action=login">Login</a></li>';
						}
					?>
				</ul>
				</div>
			</nav>
		</header>
		<main>
			<div>
				<h2>Account Information:</h2>
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
	</body>
</html>