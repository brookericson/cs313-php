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
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Category</label>
				<input type="text" name="category"class="form-control">
				</div>
				<div class="form-group">
				<label>Author</label>
				<input type="text" name="author" class="form-control">
				</div>
				<div class="form-group">
				<label>Quote Text:</label>
				<textarea name="quote" class="form-control"></textarea>
				</div>
				<input type="hidden" name="action" value="updateQuoteById">
				<input type="submit" value="Update Quote" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>