<!DOCTYPE html>
<html>

<head>
	<title>update Bus</title>

	<style>
		.body {
			font-family: Arial, sans-serif;
		}

		.card {
			font-family: Arial, sans-serif;
			margin: 5% auto;
			text-align: center;
			max-width: 35%;
			padding: 2%;
			background-color: #fff;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
		}

		/* a:hover {
			color: whitesmoke;
			background-color: green;

		} */
	</style>
</head>

<body>
	<center>
		<h1>Update Bus </h1>
	</center>
	<div class="card">
		<form action="" method="post">

			Bus Number : <input type="text" name="busNo" style="margin-left: 50px;width: 200px;" value="<?php echo $_POST['busNo'] ?? ''; ?>"><br>

			<br>

			Bus Name : <input type="text" name="busName" style="margin-left: 65px;width: 200px;" value="<?php echo $_POST['busName'] ?? ''; ?>"><br>

			<br>
			<input type="submit" name="Edit" value="update Bus "><br>
			</br>
		</form>
		<button style=" background-color: red; color: white;"> <a href=" manage_bus.php ">Back to Admin portal </a></button>
	</div>
	< <?php
		error_reporting(0);
		include('connection_bus.php');
		// include 'show_bus.php';
		if (isset($_POST['Edit'])) {
			$busID = $_GET['busID'];
			$busNo = $_POST['busNo'];
			$busName = $_POST['busName'];



			$sql = "UPDATE bus SET busNo='$busNo', busName='$busName' WHERE busID='$busID'";
			$data = mysqli_query($con, $sql);
			if ($data) {
				header('Location: busname.php');
			} else {
				echo include 'update_bus.php';
			}
		}
		?> </body>

</html>