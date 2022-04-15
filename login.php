<?php
include 'database.php';
if(true){
	$a=$_POST['lg_username'];
	$b=$_POST['lg_password'];
	$sql="select Password from users where Username='$a'";
	$rows=mysqli_query($con, $sql);
	if(mysqli_num_rows($rows)==1){
		$r=mysqli_fetch_array($rows);
		if($b==$r['Password']){
			echo "Login Success";
			header("Location:homepage.php");
		}else{
			echo "Login Failed";
			header("Location:log.html");
		}
	}
	mysqli_close($con);
}
?>
			
	
