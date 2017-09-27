<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2 class="signup">Login</h2>
		<form class="signup-form" action="includes/login.inc.php" method="POST">
			<input type="text" name="uid" placeholder="Username/e-mail">
			<input type="password" name="pwd" placeholder="password">
			<button type="submit" name="submit" class="btn btn-outline-danger">Log in</button>
		</form>
	</div>
</section>

<?php
	include_once 'footer.php';
?>