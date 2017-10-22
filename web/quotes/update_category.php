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
			<h1>Update Category</h1>
			<form action='index.php' method='post'>
				<div class="form-group">
				<label>Category Name</label>
				<input type="text" name="category_name" class="form-control" value="<?php 
						if(isset($_SESSION['categoryInfo'])){
							echo $_SESSION['categoryInfo']['category_name'];
						}?>">
				</div>
				<?php if(isset($_SESSION['categoryInfo'])){ 
						echo "<input type='hidden' name='category_id' value=";
						echo $_SESSION['categoryInfo']['category_id'];
						echo ">";
				} ?>
				<input type="hidden" name="action" value="UpdateCategory">
				<input type="submit" value="Update Category" class="btn btn-primary">
			</form>
		</main>
		<footer> &copy; 2017 Brooke Ericson</footer>
	</body>
</html>