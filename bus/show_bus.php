<!DOCTYPE html>
<html>
<head>
	<title>show Movie table</title>
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
<center><h1>Add Bus </h1></center>

<a href="bus_details.php" , font size="10" >Add a New Bus  </font> </a>
<h2> All Bus</h2>
<?php
include ('connection_bus.php');
$sql ="select * from bus";
$data =mysqli_query($con,$sql);
$total=mysqli_num_rows($data);
if ($total=mysqli_num_rows($data)) {
	?>
	<table class="table table-striped">
      <thead>
<tr>
<th>BusID</th>
<th>BusNo</th>


<th>Edit</th>
<th>Delete</th>
</tr>

	<?php
	while ($result = mysqli_fetch_array($data)) {
		echo "
			<tr>
				<td>".$result['busID']."</td>
				<td>".$result['busNo']."</td>
                <td>".$result['busName']."</td>
				
				
				<td><a href='update_bus.php?busID=$result[busID] & busNo=$result[busNo] & busName=$result[busName] '> Edit </a></td>
				<td><a href='delete_bus.php?busID=$result[busID] '>delete </a></td>
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
<div class="footer">
    <center><h3>&copy; 2023 </h3></center>
    
  
</body>
</html>
 <!--------- echo "<br>".$result['id']."  ".$result['busNo']." ".$result['ReleaseDate']." ".$result['Genre']."  ".$result['number']."  ".$result['address']."<br>";_----->