<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>

<body>
<center><h1>Update Routes </h1></center>
<form action="" method="post">
	
	Route Name : <input type="text" name="routeName" style="margin-left: 50px;width: 200px;" value="<?php echo $_POST['routeName'] ?? ''; ?>"><br>
	
	<br>
	<input type="submit" name="Edit" value="update"><br>
</br>
</form>

<button><a href="show_routes.php">show routes</a></button>

<?php
error_reporting(0);
include ('connection_route.php');
include 'show_routes.php';
if (isset($_POST['Edit']))
{
	$routeId = $_GET['routeId'];
	$routeName = $_POST['routeName'];
	
	
 	$sql="UPDATE routes SET routeName='$routeName' WHERE routeId='$routeId'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		header('Location: show_routes.php');
 	}
 	else{
		echo include 'update_routes.php';
 	}
}
?>
</body>
</html>