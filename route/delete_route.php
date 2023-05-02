<?php
include ('connection_route.php');
$routeId = $_GET['routeId'];
$sql ="DELETE FROM `routes` WHERE routeId='$routeId'";
$data = mysqli_query($con,$sql);
if ($data) {
	echo "deleted";
	header('location:show_routes.php');
}else
{
	echo "error";
}
 ?>