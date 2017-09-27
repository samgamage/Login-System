<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">  
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>

<header>
	<nav class="stroke">
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
				<li><a href=""><i class="fa fa-bell-o" aria-hidden="true"></i> Notifications</a></li>
				<li><a href=""><i class="fa fa-comments-o" aria-hidden="true"></i> Messages</a></li>
				<a href="index.php" class="logo"><img src="img/logo.png" style="width: 33px; height:33px; margin-top: 15px; margin-bottom: 15px; position: absolute; left: 49.1%;"></img></a>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_id'])) {
						echo '<form action="includes/logout.inc.php" method="POST">
							  <button type="submit" name="submit" class="btn btn-outline-danger">Logout</button>
							  </form>';
						
					} else {
						echo '<a href="login.php">Log in</a>
							  <a href="signup.php">Sign up</a>';
					}
				?>
			</div>
		</div>
	</nav>
</header>