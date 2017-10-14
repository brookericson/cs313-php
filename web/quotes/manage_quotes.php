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
			<a href="index.php?action=addQuote" class="btn btn-primary">Create a New Quote</a>
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
					 echo '<td>'.$quote['quote_id'].'</td>';
				     echo '<td>'.$quote['quote'].'</td>';
					 echo '<td><a class="btn btn-primary" href="index.php?action=updateQuote&quote='.$quote['quote_id'].'">Update</a></td>';
				     echo '<td><a class="btn btn-danger" href="index.php?action=deleteQuote&quote='.$quote['quote_id'].'">Delete</a></td>';
					 echo '</tr>';
					}
				?>
			</table>
			
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>