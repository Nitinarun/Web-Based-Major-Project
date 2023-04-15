//Final Year Web-Based Project: script.js/(Release) Coded by ara16-->
function gameValues(){
	let shipWeight = "<?php echo $shipResult; ?>";
	let noofCrew = document.getElementById("crew").value;
	let noofVisitors = document.getElementById("visitors").value;
	let litresofWater = document.getElementById("water").value;
	let daysofFood = document.getElementById("food").value;	
	
	
	
	if((shipWeight === "<?php echo $shipResult; ?>") && (noofCrew > 10 && noofCrew < 20) && (noofVisitors > 0 && noofVisitors < 10) && (litresofWater > 10 && litresofWater < 30) && (daysofFood > 10 && daysofFood < 30)){
		window.location.href = "gamesuccess.php";
	} else {
		window.location.href = "gamefailed.php"; 
	}	
}

