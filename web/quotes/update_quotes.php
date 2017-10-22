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
			<h1>Update the Quote</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Category</label>
				<select name="category_id" class="form-control" >
						<?php 
					
							if(isset($_SESSION['quoteInfo'])){
								echo '<option value=';
								echo $_SESSION['quoteInfo']['category_id'];
								echo '>';
								echo $_SESSION['quoteInfo']['category_name'];
								echo '</option>';
							}
					
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
				<select name="authorid" class="form-control">
					<?php 
						if(isset($_SESSION['quoteInfo'])){
								echo '<option value=';
								echo $_SESSION['quoteInfo']['author_id'];
								echo '>';
								echo $_SESSION['quoteInfo']['name'];
								echo '</option>';
							}
			
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
				<textarea name="quote" class="form-control"><?php 
						if(isset($_SESSION['quoteInfo'])){
								echo $_SESSION['quoteInfo']['quote'];
							} ?>
			    </textarea>
				</div>
				<input type="hidden" name="action" value="UpdateQuote">
				<?php if(isset($_SESSION['quoteInfo'])){ 
						echo "<input type='hidden' name='quote_id' value=";
						echo $_SESSION['quoteInfo']['quote_id'];
						echo ">";
				} ?>
				<input type="submit" value="Update Quote" class="btn btn-primary">
			</form>
			<footer> &copy; 2017 Brooke Ericson</footer>
		</main>
	
	</body>
</html>