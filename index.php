<?php
	include_once 'header.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<?
			if (!isset($_SESSION['u_id'])) {
				header("Location: signup.php");
			} else {
		?>
		<div class="dashboard dashboard-left">

		</div>
		<div class="dashboard dashboard-left">

		</div>
		<?}?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
