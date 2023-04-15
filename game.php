<!--Final Year Web-Based Project: game.php/(Release) Coded by ara16-->
<?php
include ("db.inc.php");
session_start();
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
			<h2 class="riversdale-title">RIVERSDALE VOYAGE GAME</h2>
			<img src="images/Riversdale Painting.jpg" class="game-riversdale-image">
			<div class="game-container">
				<form action="javascript:" onsubmit="gameValues()" method="GET">
					<!---This is the Game Input fields--->
					<label class="email-title">Ship Weight (tonnes):</label>
					<p id="rangeValue"><?php 
					//SQL Statement for retrieving information of the ship weight
					$shipWeightsql = "SELECT shipWeight FROM game";
					$shipResult = mysqli_query($conn, $shipWeightsql);
					if ($shipResult->num_rows > 0) {
						// output data of each row
						while($row = $shipResult->fetch_assoc()){
							echo $row["shipWeight"]. " tonnes <br>";							
						}
						} else {
						  echo "0 results";
						}
					?></p>
					<label class="email-title">Voyage:</label>
					<p id="rangeValue"><?php 
					//SQL Statement for retrieving information of the voyage name
					$voyageSql = "SELECT voyageName FROM game";
					$voyageResult = mysqli_query($conn, $voyageSql);
					if ($shipResult->num_rows > 0) {
						// output data of each row
						while($row = $voyageResult->fetch_assoc()){
							echo $row["voyageName"]. "<br>";							
						}
						} else {
						  echo "0 results";
						}
					?></p>
					<label class="email-title">Days of Voyage:</label>
					<p id="rangeValue"><?php 
					//SQL Statement for retrieving information of the voyage name
					$voyageSql = "SELECT voyageTime FROM game";
					$voyageResult = mysqli_query($conn, $voyageSql);
					if ($shipResult->num_rows > 0) {
						// output data of each row
						while($row = $voyageResult->fetch_assoc()){
							echo $row["voyageTime"]. " days <br>";							
						}
						} else {
						  echo "0 results";
						}
					?></p>
					<label class="email-title">How many crew members do we need ?</label>
					<p class="rangeNumber2" id="rangeValue2">10</p>
					<input type="range" min="0" max="30" value="10" class="slider" id="crew" oninput="rangeValue2.innerText = this.value" required><br>
					<label class="email-title">Can we take visitors ?</label><br>
					<p id="rangeValue3" class="rangeNumber3">5</p>
					<input type="range" min="0" max="10" value="5" class="slider" id="visitors" oninput="rangeValue3.innerText = this.value" required><br>	
					<label class="email-title"> How many Litres of Water Captain ?</label><br>
					<p id="rangeValue4" class="rangeNumber4">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="water" oninput="rangeValue4.innerText = this.value" required><br>
					<label class="email-title">Days of food Captain ?</label><br>
					<p id="rangeValue5" class="rangeNumber5">10</p>
					<input type="range" min="0" max="100" value="10" class="slider" id="food" oninput="rangeValue5.innerText = this.value" required><br>	
					<!---This is the Submit button--->
					<input type="submit" value="Submit !" class="SU-btn">
					<br>
				</form> 
			</div>
		</div>
	</body>
</html>