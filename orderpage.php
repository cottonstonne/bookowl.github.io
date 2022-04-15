<?php
session_start();
?>
<html>
	<head>
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link rel="stylesheet" href="log.css">
	</head>
	<body style="background-image:url('Ipicker.png')">
		<div class="outer">
			<div class="text-center" style="padding:50px 0">
				<div align=center class="logo">Drop Your Details<br> And Address <br> To Deliver <br>:)</div>
				<!-- Main Form -->
				<div class="login-form-1">
					<form action="conorder.php" method="post" id="login-form" class="text-left">
						<div class="login-form-main-message"></div>
						<div class="main-login-form">
							<div class="login-group">
								<div class="form-group">
									<label for="lg_name" class="sr-only">Name</label>
									<input type="text" class="form-control" id="lg_name" name="Name" placeholder="Name">
								</div>
								<div class="form-group">
									<label for="lg_phone" class="sr-only">Phone no:</label>
									<input type="number" class="form-control" id="lg_phone" name="phone" placeholder="Phone no">
								</div>
								<div class="form-group">
									<label for="lg_email" class="sr-only">Email</label>
									<input type="email" class="form-control" id="lg_email" name="Email" placeholder="email">
								</div>
								<div class="form-group">
									<label for="lg_address" class="sr-only">Address</label>
									<input type="textarea" class="form-control" id="lg_address" name="Address" placeholder="address">
								</div>
								<div class="form-group">
									<label for="lg_bname" class="sr-only">Book Name</label>
									<input type="text" class="form-control" id="lg_bname" name="Bname" placeholder="book name">
								</div>
							</div>
							<button type="submit" class="login-button"><i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<!-- end:Main Form -->
			</div>
		</div>
		<style>
.outer{
	display:flex;
	align-items:center;
	justify-content:center;
}
.owl{
	display:flex;
	justify-content:center;
}
.owl img{
	width:15%;
}
		</style>
		<!--
		<script src="log.js"></script>
		-->
	</body>
</html>
