<?php
	session_start();
?>

<!DOCTYPE html>
<html style="height:100%;">
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body style="height: 100%; background-image: url('img/background.jpg');">

<div class="welcome-container">
  <div class="welcome-content">
    <form class="signup-form" action="includes/signup.inc.php" method="POST">
      <h2 class="signup">Join us today.</h2>
      <input type="text" name="first" placeholder="Firstname">
      <input type="text" name="last" placeholder="Lastname">
      <input type="text" name="email" placeholder="E-mail">
      <input type="text" name="uid" placeholder="Username">
      <input type="password" name="pwd" placeholder="Password">
      <button type="submit" name="submit" class="btn btn-outline-danger">Sign up</button>
      <h3>Already have an account? <a href="login.php">Log in.</a></h3>
    </form>
  </div>
</div>



</body>

<?php
	include_once 'footer.php';
?>
