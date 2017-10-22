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
			<h1>Sign Up:</h1>
			<form action="index.php" method="post">
				<div class="form-group">
				<label>Username</label>
				<input type="text" name="user_name" class="form-control">
				</div>
				<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
				<label>Password</label>
			    <input type="text" name="password" class="form-control">
				</div>
				<input type="hidden" value="2" name="type"> 
				<input type="hidden" name="action" value="Signup">
				<input type="submit" value="Sign up" class="btn btn-default">
 			</form>
			<p>Don't have an account? Sign Up <a href="index.php?action=signup">here</a></p>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>