//Final Year Web-Based Project: script.js/(Release) Coded by ara16-->
function grabbingValues(){
	let shipWeight = document.getElementById("shipWeight").value;
	let noofCrew = document.getElementById("crew").value;
	let noofVisitors = document.getElementById("visitors").value;
	let litresofWater = document.getElementById("water").value;
	let daysofFood = document.getElementById("food").value;

	if((shipWeight >=30) && (noofCrew >= 10) && (noofVisitors >= 10) && (litresofWater >= 30) && (daysofFood >= 30)){
		window.location.href = "gamesuccess.html";
	} else {
		window.location.href = "gamefailed.html"; 
	}
}