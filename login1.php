<?php

include("connection.php");

if(isset($_POST["login_button"]))
{
	$eid = $_POST["emailid"];
	$pwd = $_POST["password"];


	$qry = "select * from student where email = '$eid' AND password = '$pwd'";

	$result = mysqli_query($connect, $qry); 

	$rows = mysqli_num_rows($result);

	if($rows>0)	
	{
		header("location:user.php");
	}
	else
	{
		?> <script> alert("Invalid Email OR Password"); </script> <?php
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
	<div class="container" method="post">
		<div class="row">
			<div class="col-md-5 mx-auto">
				<div class="card">
					<div class="card-header">
						Login-form
				</div>
				<div class="card-body" >
					<form method="post">
					
					
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password </label>
						<input type="password" name="password" class="form-control">
					</div>
					
					</div>
					<div class="form-group">
						<button class="btn-btn-primary" type="submit" name="loginbtn">Login</button>
					</div>
					<p>Dont have an account.<a href="register.php">Sign up</a></p>
				</form>
			</div>
		</div>
	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>