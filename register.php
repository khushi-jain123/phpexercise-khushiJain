<?php

include("connection.php");

if(isset($_POST["register_button"]))
{
$fn = $_POST["fullname"];	//no
$eid = $_POST["email"];	///no
$pwd = $_POST["password"]; //no
$cont = $_POST["contact"]; //no

$qry = "INSERT INTO `student`(`id`, `fullname`, `email`, `password`, `contact`) VALUES (NULL, '$fn','$eid','$pwd','$cont')";

$result = mysqli_query($connect, $qry);

if($result)
{
	?> <script> alert("Registration Successfull"); </script> <?php
}
else
{
	?> <script> alert("Something went wrong, try again later"); </script> <?php
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
						Registration Form
				</div>
				<div class="card-body" >
					<form method="post">
					
					<div class="form-group">
						<label>full Name</label>
						<input type="text" name="fullname" class="form-control">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" name="email" class="form-control">
					</div>
					<div class="form-group">
						<label>Password </label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-group">
						<label>Mobile no.</label>
						<input type="tel" name="Mobile" class="form-control">
					</div>
					<div class="form-group">
						<button class="btn-btn-primary" type="submit" name="registerbtn">Register</button>
					</div>
					<p>alredy have account<a href="login.php">Sign in</a></p>
				</form>
			</div>
		</div>
	</div>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>