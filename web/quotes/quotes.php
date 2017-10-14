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
			<h1>Find a Quote:</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
					<label>By Category:</label>
				<select name="category_id" class="form-control">
					<option> -- select a category -- </option>
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
				<input type="hidden" name="action" value="findByCategory">
				<input type="submit" value="Search Quotes" class="btn btn-default">
			</form>
			
			<form action='index.php' method='post'>
				<div class="form-group">
					<label>By Author:</label>
				<select name="author_id" class="form-control">
					<option> -- select an author -- </option>
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
				<input type="hidden" name="action" value="findByAuthor">
				<input type="submit" value="Search Quotes" class="btn btn-default">
			</form>
			<hr>
			<div class="quote-container row">
				<?php 
				  if (isset($quotes)) {
				 	foreach ($quotes as $quote) {
					 echo "<div class='quote col-sm-4'>";
					 echo $quote['quote'];
					 echo " <span>- ";
					 echo $quote['name'];
					 echo "</span>";
					 echo "</div>";
				 	}
				  }	
				?>
			</div>
			<footer> &copy; 2017 Brooke Ericson</footer>
		</main>
	</body>
</html>