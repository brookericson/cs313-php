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
			<h1>Login:</h1>
			<form>
				<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
				<label>Password</label>
			    <input type="text" name="password" class="form-control">
				</div>
				<input type="submit" value="Log In" class="btn btn-default">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>