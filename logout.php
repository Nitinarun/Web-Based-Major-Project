<!--Final Year Web-Based Project: logout.php/(Release) Coded by ara16-->
<?php
session_start();

if(isset($_SESSION['employeeEmail'])){
	session_destroy();
	header("Location: loginpage.php?error=User has logged out");
} else{
	header("Location: loginpage.php?error=User has logged out");
}
?>