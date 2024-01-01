<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>

<body>
<form action="" method="get">
     <input type="text" name="BusLocation" placeholder="" value="<?php echo $_GET['BusLocation']; ?>"><br><br>
	<input type="text" name="LotNumber" placeholder="" value="<?php echo $_GET['LotNumber']; ?>"><br><br>
	<input type="text" name="DepartureTime" placeholder="" value="<?php echo $_GET['DepartureTime']; ?>" ><br><br>
	<input type="text" name="ArrivalTime" placeholder="" value="<?php echo $_GET['ArrivalTime']; ?>"><br><br>
	
	<input type="submit" name="Edit" value="update">
</form>
</form>

<button><a href="show.php">show data</a></button>
	</div>
<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$BusLocation = $_GET['BusLocation'];
	$LotNumber = $_GET['LotNumber'];
	$DepartureTime = $_GET['DepartureTime'];
	$ArrivalTime = $_GET['ArrivalTime'];
	
 	$sql="UPDATE movie SET  BusLocation='$BusLocation' , LotNumber='$LotNumber' , DepartureTime='$DepartureTime', ArrivalTime='$ArrivalTime'  WHERE BusLocation='$BusLocation'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
		echo include 'show.php';
 	}
}
else
{
	echo "";
}
?>
</body>
<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>

<body>
<form action="" method="get">
     <input type="text" name="BusLocation" placeholder="" value="<?php echo $_GET['BusLocation']; ?>"><br><br>
	<input type="text" name="LotNumber" placeholder="" value="<?php echo $_GET['LotNumber']; ?>"><br><br>
	<input type="text" name="DepartureTime" placeholder="" value="<?php echo $_GET['DepartureTime']; ?>" ><br><br>
	<input type="text" name="ArrivalTime" placeholder="" value="<?php echo $_GET['ArrivalTime']; ?>"><br><br>
	
	<input type="submit" name="Edit" value="update">
</form>
</form>

<button><a href="show.php">show data</a></button>
	</div>
<?php
error_reporting(0);
include ('connection.php');
if ($_GET['submit'])
{
	$BusLocation = $_GET['BusLocation'];
	$LotNumber = $_GET['LotNumber'];
	$DepartureTime = $_GET['DepartureTime'];
	$ArrivalTime = $_GET['ArrivalTime'];
	
 	$sql="UPDATE movie SET  BusLocation='$BusLocation' , LotNumber='$LotNumber' , DepartureTime='$DepartureTime', ArrivalTime='$ArrivalTime'  WHERE BusLocation='$BusLocation'";
 	$data=mysqli_query($con, $sql);
 	if ($data) {
 		//echo "record update";
 		header('location:show.php');
 	}
 	else{
		echo include 'show.php';
 	}
}
else
{
	echo "";
}
?>
</body>
</html>