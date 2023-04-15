<!--Final Year Web-Based Project: login.html/(Release) Coded by ara16-->
<?php
include ("db.inc.php");
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=content-width, initial-scale=1.0">
		<title>Login - Ceredigion Museum</title>
		<link href= "stylesheet.css" rel ="stylesheet">
		<script src="script.js" rel="script"></script>
	</head>

	<body>
		<div class="parallax">
		<!---This is the fixed header--->
		<div class="fixed-header">
			<div class="topnav">
				<img src="images/Museum Logo.PNG" onclick="window.location.href='riversdale.php';" class="logo">
				<a class="active" href="login.html"><b>Login</a>
				<a href="game.php"><b>Riversdale Game</a>
				<a href="riversdale.php"><b>Riversdale Ship</a>
			</div>
		</div>
		<!---This is the Container Form--->
		<div class="container">
			<!---This is the title--->
			<form action="login.php" method="post">
				<h2 class="title">Login</h2>
				<br>
				<!---This is the Email & Password fields--->
				<label class="email-title">Email:</label><br>
				<input type="text" class="form-control" name="email" placeholder="Enter Email"><br>
				<label class="password-title">Password:</label><br>
				<input type="password" class="form-control" name="password" placeholder="Enter Password"><br>					
				<!---This is the Submit button--->
				<input type="submit" class="SU-btn" value="Submit">
			</form> 
			<br>
			<!---Error Messages--->
			<?php
				$fullURL="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				
				if(strpos($fullURL, "signup=emailrequired") == true){
					echo "<p class='error'>Error: Email is required!</p>";
					exit();
				} 
				elseif (strpos($fullURL, "signup=passwrdrequired") == true){
					echo "<p class='error'>Error: Password is required!</p>";
					exit();
				} 
				elseif (strpos($fullURL, "signup=incorrectdetails") == true){
					echo "<p class='error'>Error: Incorrect Details</p>";
					exit();
				}
				elseif (strpos($fullURL, "signup=incorrectemployeedetails") == true){
					echo "<p class='error'>Error: Incorrect Employee Details</p>";
					exit();
				}
			?>
		</div>
	</body>
</html>