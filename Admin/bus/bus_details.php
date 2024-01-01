<!DOCTYPE html>

<html>

<head>
    <title>Add Bus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
</head>
<style>
    .input_b {
        background-color: #008CBA;
        color: white;
    }

    h1 {

        /* add shadow */
        font-size: 300%;
        /* increasing the font size */
    }

    h3 {

        /* add shadow */
        font-size: 300%;
        /* increasing the font size */
    }

    .card {
        font-family: Arial, sans-serif;
        margin: 5% auto;
        text-align: center;
        max-width: 50%;
        padding: 2%;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
    }
</style>

<body>
    <center>
        <h1>Add Bus </h1>
    </center>

    <div class="card">
        <form action="bus_details.php" method="post">
            <label>Bus Number :</label>
            <input type="text" name="busNo" placeholder="" autofocus="autofocus" style="margin-left: 50px;width: 200px;"><br><br>

            <label>Bus Name:</label>
            <input type="text" name="busName" placeholder="" autofocus="autofocus" style="margin-left: 70px;width: 200px;"><br><br>


            <input type="submit" name="submit" value="Submit" class="input_b" ;><br><br>

        </form>


        <button><a href="show_bus.php">View Bus List</a></button>


        <button> <a href="manage_bus.php">Back to Admin portal </a></button>
    </div>
    </div>
    <div class="footer">
        <!-- <center>
            <h3>&copy; 2023 </h3>
        </center> -->

    </div>
</body>

</html>
<?php

error_reporting(0);
include 'connection_bus.php';


if (isset($_POST['submit'])) {

    $busNo = $_POST['busNo'];
    $busName = $_POST['busName'];





    $sql = "INSERT INTO `bus` VALUES ('$busID','$busNo','$busName')";

    $data = mysqli_query($con, $sql);

    if ($data) {
        echo include 'show_bus.php';
    } else {
        echo "sorry No Bus is add to the list. ";
    }
}
?>