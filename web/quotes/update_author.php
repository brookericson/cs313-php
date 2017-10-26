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
			<h1>Update Author</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Author Name</label>
				<input type="text" name="name" class="form-control" value="<?php 
						if(isset($_SESSION['authorInfo'])){
							echo $_SESSION['authorInfo']['name'];
						}?>">
				</div>
				<?php if(isset($_SESSION['authorInfo'])){ 
						echo "<input type='hidden' name='author_id' value=";
						echo $_SESSION['authorInfo']['author_id'];
						echo " required>";
				} ?>
				<input type="hidden" name="action" value="UpdateAuthor">
				<input type="submit" value="Update Author" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>