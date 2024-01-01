
<?php

// Include config file
require_once "db_connect.php";
//empty variabke to hold the executed result from database
// $row;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field

    $email =  htmlspecialchars($_POST['email']);
    $pass = htmlspecialchars($_POST['password']);


    //checks if its null or not, if null it throws a message 

    if (empty($email && $pass)) {
        echo "Fields are empty";
    } else {

        // echo "<br>";
        // echo "The email is: " . $email;
        // echo "<br>";
        // echo "The pass is: " . $pass;


        $sql = "SELECT  emailAddress, password FROM  admin  WHERE emailAddress ='$email'";
        $result = $con->query($sql);
        echo "<br>";
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            //getting data from the db and displaying it 
            while ($row = mysqli_fetch_assoc($result)) {
                // echo "<br>";
                // echo "Name: " . $row["firstName"] . " ,  Email: " . $row["emailAddress"] . ", password: " . $row["password"] . "<br>";
                // // this checks the inserted data as well the credential from the backend, if it matches, it gives the welcome message/ will forward you to the main page

                if ($data = ($email == $row["emailAddress"] &&  $pass == $row["password"])) {
                    header('location: AdminPage.php');


                    // echo "welcome";
                } else {
                    header("Location:login.php?invalid_login=true");
                    echo "Invalid";
                }
            }
        } else {
            header("Location:login.php?invalid_login=true");
            echo "0 results";
        }

        mysqli_close($con);
    }
}


?>
