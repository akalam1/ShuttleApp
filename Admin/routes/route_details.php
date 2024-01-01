<!DOCTYPE html>

<html>

<head>
    <title>Routes</title>
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
    .input_b {
        background-color: #008CBA;
        color: white;
    }

    h1 {
        /* text-shadow: -4px 4px 6px dimgrey; */
        /* add shadow */
        font-size: 300%;
        /* increasing the font size */
    }

    h3 {
        /* text-shadow: -4px 4px 6px dimgrey; */
        /* add shadow */
        font-size: 300%;
        /* increasing the font size */
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
</style>

<body>
    <center>
        <h1>Add Routes </h1>
    </center>

    <div class="card">
        <form action="route_details.php" method="post">
            <label>Route Name :</label>
            <input type="text" name="routeName" placeholder="" autofocus="autofocus" style="margin-left: 50px;width: 200px;"><br><br>


            <input type="submit" name="submit" value="Submit" class="input_b" ;><br><br>

        </form>

        <button><a href="show_routes.php">View Routes List</a></button>
        <button style=" background-color: red; color: white;"> <a href="routes.html">Back to Admin portal </a></button>
    </div>




</body>

</html>
<?php

error_reporting(0);
include 'connection_route.php';

if (isset($_POST['submit'])) {

    $routeName = $_POST['routeName'];




    $sql = "INSERT INTO `routes` VALUES ('$routeId','$routeName')";

    $data = mysqli_query($con, $sql);

    if ($data) {
        // echo include 'show_routes.php';
    } else {
        echo "sorry No routes is add to the list. ";
    }
}
?>