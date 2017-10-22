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
			<h1>Create a New Author</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Author Name</label>
				<input type="text" name="name" class="form-control">
				</div>
				<input type="hidden" name="action" value="createAuthor">
				<input type="submit" value="Create Author" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>