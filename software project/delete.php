<?php
include ('connection.php');
$BusLocation = $_GET['BusLocation'];
$sql ="DELETE FROM `schedul` WHERE BusLocation='$BusLocation'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show.php');
}else
{
	echo "error";
}
 ?>