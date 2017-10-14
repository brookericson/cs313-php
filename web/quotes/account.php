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
			<div>
				<h1>Account Information:</h1>
				<?php 
				foreach ($db->query('SELECT * FROM public.user') as $user){
				echo "<p>User Name: ";
				echo $user['user_name'];
				echo "</p>";
				echo "<p>User Type: ";
				echo $user['type'];
				echo "</p>";
				}	 ?>
			</div>
			<div>
				<a href="index.php?action=manageQuotes" class="btn btn-primary">Manage Quotes</a>
			</div>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>