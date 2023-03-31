<!--Final Year Web-Based Project: welcome.php/(Release) Coded by ara16-->
<?php
session_start();
if(isset($_SESSION['employeeEmail']))
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
				<a class="active" href=""><b>Account</a>
				<a href="game.php"><b>Riversdale Game</a>
				<a href="riversdale.php"><b>Riversdale Ship</a>
			</div>
		</div>
		
		<div class="demobox">
			<h2 class="riversdale-title">Login was a success !</h2>
			<img src="images/Riversdale Painting.JPG" class="riversdale-image">
			<p class="riversdale-info"><br>It is said that Captain John Griffiths of Riversdale, Lampeter Road, Aberaeron supervised her building then took command of her for several years. 
			She was one of the largest full-rigged ships that sailed out of the Mersey. This painting is by a Chinese artist, Lai Fong, who worked in Calcutta, 
			commissioned by a Welshman and now located in Aberystwyth. International trade and migration in the 19th century embodied in one object.</p><br>
			<img src="images/Types of Ships.PNG" class="types-of-ships-image">
			<p class="riversdale-info"><br>Ships of all sizes and design were built in Ceredigion. The Riversdale was within the 200 to 250 tonne category making it one the 
			largest ships to be built in Ceredigion during its time at Sea.</p><br
			<!---This is the Riversdale Game Button--->
			<input type="submit" onclick="window.location.href='game.php';" class="riversdale-game-btn" value="Riversdale Game">
		</div>
		
	</body>
</html>