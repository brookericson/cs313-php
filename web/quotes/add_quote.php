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