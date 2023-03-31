<!--Final Year Web-Based Project: login.php/(Release) Coded by ara16-->
<?php
 include ("db.inc.php");
 session_start();

if(isset($_POST['email']) && isset($_POST['password'])) {
	function validate($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}

$email = validate($_POST['email']);
$passwrd = validate($_POST['password']);

//If values of Email & Password are empty, re-direct the user back to the Login.html page
if(empty($email)){
	header("Location: login.html?error=User Email is required");
	exit();
}
else if (empty($passwrd)){
	header("Location: login.html?error=User Password is required");
	exit();
}

//SQL Statement for retrieving information of the email and password
$sql = "SELECT * FROM employees WHERE employeeEmail='$email' AND employeePwd='$passwrd'";
$result = mysqli_query($conn, $sql);


//If the result from the session matches the information on the Database, the user gets logged in
if(mysqli_num_rows($result) === 1){
	$row = mysqli_fetch_assoc($result);
	if($row['employeeEmail'] === $email && $row['employeePwd'] === $passwrd ){
		echo "Employee Account is Logged In !";
		$_SESSION['employeeEmail'] = $row['employeeEmail'];
		header("Location: welcome.php");
		exit();
	}
	else{
		header("Location: login.html?error=Incorrect Employee Email or Password");
		exit();
	}
}
//If information doesn't match, re-direct the user to the riversdale.html webpage
else{
	header("Location: riversdale.php");
	exit();
}
?>	