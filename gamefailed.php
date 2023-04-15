<!--Final Year Web-Based Project: gamefailed.html/(Release) Coded by ara16-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=content-width, initial-scale=1.0">
		<title>Game - Ceredigion Museum</title>
		<link href= "stylesheet.css" rel ="stylesheet">
		<script src="script.js" rel="script"></script>
	</head>
	
	<body>
		<div class="parallax">
		<!---This is the fixed header--->
		<div class="fixed-header">
			<div class="topnav">
				<img src="images/Museum Logo.PNG" onclick="window.location.href='riversdale.php';" class="logo">
				<?php 
				if(isset($_SESSION['employeeEmail']) && ($_SESSION['employeePwd'])){
					echo("<a href=\"logout.php\"><b>Logout</a>");
				} else {
					echo("<a href=\"loginpage.php\"><b>Login</a>");
				}
				?>
				<a class="active" href="game.php"><b>Riversdale Game</a>
				<a  href="riversdale.php"><b>Riversdale Ship</a>
			</div>
		</div>
		<!---This is the container with the Riversdale Ship Game--->
		<div class="demobox">
			<h2 class="riversdale-title">WE SUNK Captain, we didn't reach Port !</h2>
			<img src="images/Riversdale Painting.jpg" class="game-riversdale-image">
			<br><br>
			<input type="submit" onclick="window.location.href='game.php';" value="Another Voyage ?" class="riversdale-game-btn">
			<br>
		</div>
	</body>
</html>