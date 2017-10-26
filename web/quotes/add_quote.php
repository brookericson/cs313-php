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
			<h1>Create a New Quote</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control" required>
						<?php 
							foreach ($db->query('SELECT * FROM category;') as $category)
							{
							  echo '<option value=';
							  echo $category['category_id'];
							  echo '>';
							  echo $category['category_name'];
							  echo '</option>';
							}
						?>
					</select>
				</div>
				<div class="form-group">
				<label>Author</label>
				<select name="authorid" class="form-control" required>
				<?php 
					foreach ($db->query('SELECT * FROM author;') as $author)
					{
					  echo '<option value=';
					  echo $author['author_id'];
					  echo '>';
						  echo $author['name'];
						  echo '</option>';
					}
				?>
				</select>
				</div>
				<div class="form-group">
				<label>Quote Text:</label>
				<textarea name="quote" class="form-control" required></textarea>
				</div>
				<input type="hidden" name="action" value="createQuote">
				<input type="submit" value="Create Quote" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>