<?php

$connect= mysqli_connect("localhost","root","","registerdb");

if($connect)
{
	echo"connected";

}
else{
	echo "not connected";
}
?>