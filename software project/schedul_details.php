<!DOCTYPE html>

<html>
<head>
	<title>MSU Movie Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</head>
<style>
	.input_b{
            background-color: #008CBA;
            color: white;
        }
        h1
         { 
            text-shadow: -4px 4px 6px dimgrey; /* add shadow */
            font-size: 400%; /* increasing the font size */
         }
		 h3
         { 
            text-shadow: -4px 4px 6px dimgrey; /* add shadow */
            font-size: 300%; /* increasing the font size */
         }
	</style>
<body>
  <center><h1>  Schedul Add   </h1></center>
 

	<form action="schedul_details.php" method="post">
	<label>Location Name  :</label>
	<input type="text" name="BusLocation" placeholder=""  autofocus="autofocus"   style="margin-left: 50px;width: 200px;"><br><br>
	<label>Lot Number  :</label>
	<input type="text" name="LotNumber" placeholder=""  autofocus="autofocus"   style="margin-left: 50px;width: 200px;"><br><br>
	<label>Departure Time:</label>
	<input type="text" name="DepartureTime" placeholder="" style="margin-left: 50px;width: 200px;"><br><br>
	<label>ArrivalTime:</label>
	<input type="text" name="ArrivalTime" placeholder="" style="margin-left: 100px;width: 200px;" ><br><br>
	
	<input type="submit" name="submit" value="Insert Movie"  class="input_b"  ; ><br><br>
	
	</form>

<button><a href="show.php">View Movie List</a></button>
	</div>
</div>
<div class="footer">
    <center><h3>&copy; 2023 </h3></center>
    
  
</body>
</html>
<?php 

error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {
    $BusLocation = $_POST['BusLocation'];
	$LotNumber = $_POST['LotNumber'];
	$DepartureTime = $_POST['DepartureTime'];
	$ArrivalTime = $_POST['ArrivalTime'];
	


	$sql = "INSERT INTO `schedul` VALUES ('$BusLocation','$LotNumber','$DepartureTime','$ArrivalTime')";
	
	$data=mysqli_query($con,$sql);

	if ($data) {
		echo include 'show.php';
	}else
	{
		echo "sorry No Movie is add to the list. ";
	}
}
?>


<!DOCTYPE html>

<html>
<head>
	<title>MSU Movie Center</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
</head>
<style>
	.input_b{
            background-color: #008CBA;
            color: white;
        }
        h1
         { 
            text-shadow: -4px 4px 6px dimgrey; /* add shadow */
            font-size: 400%; /* increasing the font size */
         }
		 h3
         { 
            text-shadow: -4px 4px 6px dimgrey; /* add shadow */
            font-size: 300%; /* increasing the font size */
         }
	</style>
<body>
  <center><h1>  Schedul Add   </h1></center>
 

	<form action="schedul_details.php" method="post">
	<label>Location Name  :</label>
	<input type="text" name="BusLocation" placeholder=""  autofocus="autofocus"   style="margin-left: 50px;width: 200px;"><br><br>
	<label>Lot Number  :</label>
	<input type="text" name="LotNumber" placeholder=""  autofocus="autofocus"   style="margin-left: 50px;width: 200px;"><br><br>
	<label>Departure Time:</label>
	<input type="text" name="DepartureTime" placeholder="" style="margin-left: 50px;width: 200px;"><br><br>
	<label>ArrivalTime:</label>
	<input type="text" name="ArrivalTime" placeholder="" style="margin-left: 100px;width: 200px;" ><br><br>
	
	<input type="submit" name="submit" value="Insert Movie"  class="input_b"  ; ><br><br>
	
	</form>

<button><a href="show.php">View Movie List</a></button>
	</div>
</div>
<div class="footer">
    <center><h3>&copy; 2023 </h3></center>
    
  
</body>
</html>
<?php 

error_reporting(0);
include 'connection.php';

if (isset($_POST['submit'])) {
    $BusLocation = $_POST['BusLocation'];
	$LotNumber = $_POST['LotNumber'];
	$DepartureTime = $_POST['DepartureTime'];
	$ArrivalTime = $_POST['ArrivalTime'];
	


	$sql = "INSERT INTO `schedul` VALUES ('$BusLocation','$LotNumber','$DepartureTime','$ArrivalTime')";
	
	$data=mysqli_query($con,$sql);

	if ($data) {
		echo include 'show.php';
	}else
	{
		echo "sorry No Movie is add to the list. ";
	}
}
?>


