<?php
if (isset($_POST['$resetbtn'])) {
	$connect=mysqli_connect("localhost","root","","project4");
	$un=$_POST['username'];
	$mob=$_POST['mobile'];
 $qry="SELECT * FROM `user` WHERE username='$un' AND mobile='$mob'";
$result= mysqli_query($connect,$qry);
$data=mysql_fetch_assoc($result);
$id=$data["id"];
$row=mysql_num_rows($result);

if ($row>0) {
	$pwd=randowPassword();
	$qry="UPDATE `user` SET `password`='$pwd' WHERE id='$id'";
	$result=mysqli_query($connect,$qry);
	echo "Password reset successfully";

}
else{
	echo "invalid username or mobile number";
}
}



?>










<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="post">
		<table cellspacing="40">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>mobile</td>
				<td><input type="tel" name="mobile"></td>
			</tr>
			<tr>
				<td colspn="2" align="center"><button name="resetbtn">Reset password</button></td>
			</tr>
			<tr>
				<td colspn="2" >Password-<?php echo $data["password"]?>,kindly copy this password.password changed.</td>
			</tr>

		</table>
	</form>

</body>
</html>