<?php

//connecting database
// session_start();
require('db_connect.php');
echo "<br>";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $fname =  htmlspecialchars($_POST['fname']);
    $lname = htmlspecialchars($_POST['lname']);
    $email =  htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['pass']);

    if (empty($fname || $lname || $email || $pass)) {
        echo "Fields are empty";
    } else {
        echo "First Name: ";
        echo   $fname;
        echo "<br>";
        echo "Last Name: ";

        echo   $lname;
        echo "<br>";
        echo "Email: ";

        echo   $email;
        echo "<br>";
        echo "Pass: ";
        echo $pass;
        echo "<br>";

        echo "<br>";
        echo "Its working";
        echo "<br>";


        $sql = "INSERT INTO customers (emailAddress,password, firstName,lastName)
VALUES ('$email', '$pass', '$fname', '$lname')";

        if ($con->query($sql) === TRUE) {
            echo "New record created successfully";
            header('location: login.php');
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }

        $con->close();
    }
}
