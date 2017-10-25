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
			<h1>Create a new Category</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Category Name</label>
				<input type="text" name="category_name" class="form-control" required>
				</div>
				<input type="hidden" name="action" value="createCategory">
				<input type="submit" value="Create Category" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>