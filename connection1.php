<?php

$connect= mysqli_connect("localhost","root","","schooldb");

if($connect)
{
	echo"connected";

}
else{
	echo "not connected";
}
?>