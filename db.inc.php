<!--Final Year Web-Based Project: db.inc.php/(Release) Coded by ara16-->
<?php
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_NAME = 'cs39930_wbp';

//Determine the connection for the MySQL Database	
$conn = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
 
//If the connection isn't made, kill the connection
if(!$conn){
	die("Connection Failed: " .mysqli_connect_error());
}
?>