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
			<h1>Quote Manager</h1>
			
			<h3>Quotes <a href="index.php?action=addQuote" class="btn btn-primary">Create a New Quote</a></h3>
			<table class="table table-striped">
				  <tr>
					<th>ID</th>
					<th>Quote</th>
					 <th>Update</th>
					<th>Delete</th> 
				  </tr>
			
				<?php
				
					foreach ($db->query('SELECT * FROM quote') as $quote)
					{
					 echo '<tr>';
					 echo '<td>'.$quote[quote_id].'</td>';
				     echo '<td>'.$quote[quote].'</td>';
					 echo '<td><a class="btn btn-primary" href="index.php?action=updateQuote&quote_id='.$quote[quote_id].'">Update</a></td>';
				     echo '<td><a class="btn btn-danger" href="index.php?action=deleteQuote&quote_id='.$quote[quote_id].'">Delete</a></td>';
					 echo '</tr>';
					}
				?>
			</table>
			
			<hr>
			
			<h3>Categories <a href="index.php?action=addCategory" class="btn btn-primary">Create a New Category</a></h3>
			<table class="table table-striped">
				  <tr>
					<th>ID</th>
					<th>Category</th>
					 <th>Update</th>
					<th>Delete</th> 
				  </tr>
			
				<?php
				
					foreach ($db->query('SELECT * FROM category') as $category)
					{
					 echo '<tr>';
					 echo '<td>'.$category[category_id].'</td>';
				     echo '<td>'.$category[category_name].'</td>';
					 echo '<td><a class="btn btn-primary" href="index.php?action=updateCategory&category_id='.$category[category_id].'">Update</a></td>';
				     echo '<td><a class="btn btn-danger" href="index.php?action=deleteCategory&category_id='.$category[category_id].'">Delete</a></td>';
					 echo '</tr>';
					}
				?>
			</table>
			
			<hr>
			
			<h3>Authors 	<a href="index.php?action=addAuthor" class="btn btn-primary">Create a New Author</a></h3>
			
			<table class="table table-striped">
				  <tr>
					<th>ID</th>
					<th>Author</th>
					 <th>Update</th>
					<th>Delete</th> 
				  </tr>
			
				<?php
				
					foreach ($db->query('SELECT * FROM author') as $author)
					{
					 echo '<tr>';
					 echo '<td>'.$author[author_id].'</td>';
				     echo '<td>'.$author[name].'</td>';
					 echo '<td><a class="btn btn-primary" href="index.php?action=updateAuthor&author_id='.$author[author_id].'">Update</a></td>';
				     echo '<td><a class="btn btn-danger" href="index.php?action=deleteAuthor&author_id='.$author[author_id].'">Delete</a></td>';
					 echo '</tr>';
					}
				?>
			</table>
			
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>