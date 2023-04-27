<!DOCTYPE html>
<html>
<head>
	<title>show Schedul table</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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


<a href="schedul_details.php" , font size="10" >Add a New schedul  </font> </a>
<h2> All Schedul</h2>
<?php
include ('connection.php');
$sql ="select * from schedul";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table class="table table-striped">
      <thead>
<tr>
<th>BusLocation</th>
<th>LotNumber</th>
<th>DepartureTime</th>
<th>ArrivalTime</th>

<th>Update</th>
<th>Delete</th>
</tr>

	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['BusLocation']."</td>
				<td>".$result['LotNumber']."</td>
				<td>".$result['DepartureTime']."</td>
				<td>".$result['ArrivalTime']."</td>
				
				<td><a href='update.php?BusLocation=$result[BusLocation] & LotNumber=$result[LotNumber] & DepartureTime=$result[DepartureTime] & ArrivalTime=$result[ArrivalTime]'> Edit </a></td>
				<td><a href='delete.php?BusLocation=$result[BusLocation] '>delete </a></td>
			</tr>
		";
	}
}
else
{
 	echo "no record found";
}
?>
</table>

    
  
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['LotNumber']." ".$result['DepartureTime']." ".$result['ArrivalTime']."  ".$result['number']."  ".$result['address']."<br>";_----->