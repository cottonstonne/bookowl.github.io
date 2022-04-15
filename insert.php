<?php
include 'database.php';
if(true){
	$uname=$_POST['reg_username'];
	$pwd=$_POST['reg_password'];
	$cpwd=$_POST['reg_password_confirm'];
	$email=$_POST['reg_email'];
	$fname=$_POST['reg_fullname'];
	if($pwd==$cpwd){
		$sql="insert into users(Username,Password,ConfirmPassword,Email,Fullname)
		values('$uname','$pwd','$cpwd','$email','$fname')";
		if(mysqli_query($con,$sql)){
			echo "<script>alert('new record inserted')</script>";
			header('Location:homepage.php');
		}else{
			echo "error:".mysqli_error($con);
		}
	}else{
		header('Location:reg.php');
		echo "<script>alert('Confirm Password is not matched with password.');</script>";
	}
	mysqli_close($con);
}
?>
	
