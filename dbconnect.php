<?php

$connect= mysqli_connect("localhost","root","","project");

if($connect)
{
	echo"connected";

}
else{
	echo "not connected";
}
?>