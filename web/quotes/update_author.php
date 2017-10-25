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
			<h1>Update Author</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Author Name</label>
				<input type="text" name="name" class="form-control" value="<?php 
						if(isset($_SESSION['authorInfo'])){
							echo $_SESSION['authorInfo']['name'];
						}?>">
				</div>
				<?php if(isset($_SESSION['authorInfo'])){ 
						echo "<input type='hidden' name='author_id' value=";
						echo $_SESSION['authorInfo']['author_id'];
						echo " required>";
				} ?>
				<input type="hidden" name="action" value="UpdateAuthor">
				<input type="submit" value="Update Author" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>