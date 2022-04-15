<?php
$dbhost="localhost";
$username="root";
$password="";
$database="registration";
$con=mysqli_connect($dbhost,$username,$password,$database);
if(!$con){
	die("Error deleting record:".mysqli_error($con));
}
?>
