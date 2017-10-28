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
			<h1>Login:</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" required>
				</div>
				<div class="form-group">
				<label>Password</label>
			    <input type="password" name="password" class="form-control" required>
				</div>
				<input type="hidden" name="action" value="Login">
				<input type="submit" value="Login" class="btn btn-default">
			</form>
			<p class="link">Don't have an account? Sign Up <a href="index.php?action=signup">here</a></p>
		</main>
	</body>
</html>