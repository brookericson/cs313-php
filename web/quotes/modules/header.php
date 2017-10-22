<nav class="navbar navbar-default">
	<div class="continer-fluid">
	<ul class="nav navbar-nav">
		<li><a href="index.php?action=home">Home</a></li>				
		<li><a href="index.php?action=quotes">Quotes</a></li>
		<?php if(isset($_SESSION['loggedin'])) {
			echo '<li><a href="index.php?action=account">My Account</a></li>';
			echo '<li><a href="index.php?action=logout">Log Out</a></li>';
			}
			else {
				echo '<li><a href="index.php?action=login">Login</a></li>';
			}
		?>
	</ul>
	</div>
</nav>