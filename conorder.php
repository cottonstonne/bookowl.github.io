<?php
error_reporting(0);
$dbhost="localhost";
$dbuname="root";
$dbpass="";
$dbname="bookowl";
$conn=mysqli_connect($dbhost,$dbuname,$dbpass,$dbname);
if(!$conn){
	die("not connected");
}
if(true){
	$name=$_POST['Name'];
	$ph=$_POST['phone'];
	$email=$_POST['Email'];
	$address=$_POST['Address'];
	$Bname=$_POST['Bname'];
	if($ph!=" " && $address!=" " ){
		$sql="insert into `ordert`(`name`,`phone`,`email`,`address`,`bname`)
		values('$name','$ph','$email','$address','$Bname')";
		if(mysqli_query($conn,$sql)){
			echo "<script>alert('Order Confirmed')</script>";
			header('Location:homepage.php');
		}else{
			echo "error:".mysqli_error($conn); 
		}
	}else{
		header('Location:orderpage.php');
		echo "<script>alert('Details should be entered.');</script>";
	}
	mysqli_close($conn);
}
?>
