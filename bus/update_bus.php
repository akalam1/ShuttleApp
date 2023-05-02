<!DOCTYPE html>
<html>
<head>
	<title>update Bus</title>
</head>

<body>
<center><h1>Update Bus </h1></center>
<form action="" method="post">
	
	Route Name : <input type="text" name="busNo" style="margin-left: 50px;width: 200px;" value="<?php echo $_POST['busNo'] ?? ''; ?>"><br>

<br>

	Bus  Name : <input type="text" name="busName" style="margin-left: 65px;width: 200px;" value="<?php echo $_POST['busName'] ?? ''; ?>"><br>
	
	<br>
	<input type="submit" name="Edit" value="update Bus "><br>
</br>
</form>

<
<?php
error_reporting(0);
include ('connection_bus.php');
include 'show_bus.php';
if (isset($_POST['Edit']))
{
	$busID = $_GET['busID'];
	$busNo = $_POST['busNo'];
	$busName = $_POST['busName'];
	
	
 	$sql="UPDATE bus SET busNo='$busNo' WHERE busID='$busID'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		header('Location: show_bus.php');
 	}
 	else{
		echo include 'update_bus.php';
 	}
}
?>
</body>
</html>