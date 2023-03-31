<!--Final Year Web-Based Project: game.php/(Release) Coded by ara16-->
<?php
session_start();
$userLoggedIn = True;
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=content-width, initial-scale=1.0">
		<title>Game - Ceredigion Museum</title>
		<link href= "stylesheet.css" rel ="stylesheet">
		<script src="script.js"></script>
	</head>
	
	<body>
		<div class="parallax">
		<!---This is the fixed header--->
		<div class="fixed-header">
			<div class="topnav">
				<img src="images/Museum Logo.PNG" onclick="window.location.href='riversdale.php';" class="logo">
				<?php 
				if($userLoggedIn){
					echo("<a href=\"logout.php\"><b>Logout</a>");
				} else {
					echo("<a href=\"login.html\"><b>Login</a>");
				}
				?>
				<a class="active" href="game.php"><b>Riversdale Game</a>
				<a  href="riversdale.php"><b>Riversdale Ship</a>
			</div>
		</div>
		<!---This is the container with the Riversdale Ship Game--->
		<div class="demobox">
			<h2 class="riversdale-title">RIVERSDALE VOYAGE GAME</h2>
			<img src="images/Riversdale Painting.jpg" class="riversdale-image">
			<div class="game-container">
				<form action="javascript:" onsubmit="grabbingValues()" method="GET">
					<!---This is the Game Input fields--->
					<label class="email-title">Ship Weight (tonnes):</label>
					<p id="rangeValue">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="shipWeight" oninput="rangeValue.innerText = this.value" required><br>
					<label class="email-title">Crew Members:</label>
					<p id="rangeValue2">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="crew" oninput="rangeValue2.innerText = this.value" required><br>
					<label class="password-title">Visitors:</label><br>
					<p id="rangeValue3">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="visitors" oninput="rangeValue3.innerText = this.value" required><br>	
					<label class="email-title">Litres of Water:</label><br>
					<p id="rangeValue4">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="water" oninput="rangeValue4.innerText = this.value" required><br>
					<label class="email-title">Days of food:</label><br>
					<p id="rangeValue5">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="food" oninput="rangeValue5.innerText = this.value" required><br>					
					<!---This is the Submit button--->
					<input type="submit" value="Submit !" class="SU-btn">
				</form> 
			</div>
		</div>
	</body>
</html>