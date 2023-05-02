<?php
include ('connection_bus.php');
$busID = $_GET['busID'];
$sql ="DELETE FROM `bus` WHERE busID='$busID'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show_bus.php');
}else
{
	echo "error";
}
 ?>