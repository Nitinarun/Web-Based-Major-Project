<!--Final Year Web-Based Project: welcome.php/(Release) Coded by ara16-->
<?php
session_start();
?>
<!DOCTYPE html>
<html lang ="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=content-width, initial-scale=1.0">
		<title>Riversdale Ship - Ceredigion Museum</title>
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
				<a href="game.php"><b>Riversdale Game</a>
				<a class="active" href="riversdale.php"><b>Riversdale Ship</a>
			</div>
		</div>
		<!---This is the container with information about the Riversdale Ship--->
		<div class="demobox">
			<h2 class="riversdale-title">RIVERSDALE VOYAGE SHIP</h2>
			<img src="images/Old Aber Coast.jpg" class="old-aber-image">
			<p class="riversdale-info">Ceredigion has about 60 miles of coastline which includes many beautiful beaches, small harbours and two Ports of Cardigan & Aberystwyth.
			<br><br>For many centuries Ceredigion people made their living - and lost their lives - in the sea. There were more fish in the sea past times, and herring was one of the 
			principal foodstuffs for the coastal communities. Small vessels traded around the coast, moving materias like slates, timber and coal, which would be expensive and 
			difficult to move overland. Larger ships sailed to ports all over the world. Emigration from Cardiganshire to America & later to Australia promised a new life to 
			improvished local people.<br><br>Ceredigion's sailors were skilled men, often trained in the complicated art of navigation, and they went all over the world bringing 
			back gifts and stories to their families and communities.<br><br>
			<img src="images/Riversdale Painting.jpg" class="riversdale-image">
			<br><br>Ceredigion lies along the edge of the sea, a seeming dead end, but the Riversdale reminds us of our locality's international connections.
			<br><br>The Riversdale was a merchantman or windjammer. Weighing at 2,206 tonnes gross. She was built in Glasgow, Scotland in 1894 for the Leyland Line by William Hamilton
			and Co. She was one of the largest full-rigged ships sailing out of the Mersey. It is said that Captain John Griffiths of Riversdale, Lampeter Road, 
			Aberaeron supervised her building then took command of her for several years. He had formerly commanded the Andornera, said to be the largest sailing ship under the 
			British flag.<br><br>In 1910 she was sold to a German firm, renames the Harvesthehude and interned at Santa Rosalia on the outbreak of the First World War. At the end
			of the war, she was handed over to the French who sold her to the Dollar Line, San Francisco.<br><br>Lai Fong, a Painter active between 1890 and 1910, emigrated from Hong Kong, China to Calcutta, India where he became the leading pier-head painter. As a result of 
			his position, Lai Fong produced a remarkable number of large size oil-on-canvas portraits of sailing vessels from all over the world. He was known for his scrupulougly 
			accurate depictions.</p><br>
			<img src="images/Types of Ships.PNG" class="types-of-ships-image">
			<p class="riversdale-info"><br>Ships of all sizes and design were built in Ceredigion. The Riversdale was within the 200 to 500 tonne category making it one the 
			largest ships to be built in Ceredigion during its time at Sea.</p><br>
			<!---This is the Riversdale Game Button--->
			<input type="submit" onclick="window.location.href='game.php';" class="riversdale-game-btn" value="Riversdale Game">
		</div>
	</body>
</html>