<?php
// change_password.php


// start the session
session_start();

// check if the user is logged in
if (!isset($_SESSION['username'])) {
    // user is not logged in, redirect to login page
    header("Location: login.php");
    exit;
}

// check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // form was submitted, process the request

    // get the current password and the new password from the form
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];

    // verify the current password
    if ($current_password == $_SESSION['password']) {
        // current password is correct, update the password in the session
        $_SESSION['password'] = $new_password;

        // redirect the user to the home page
        header("Location: home.php");
        exit;
    } else {
        // current password is incorrect, display an error message
        $error = "Current password is incorrect.";
    }
}

// display the change password form
?>
<!DOCTYPE html>
<html>

<head>
    <title>Change Password</title>
</head>

<body>
    <h1>Change Password</h1>
    <?php if (isset($error)) {
        echo "<p style='color: red'>" . $error . "</p>";
    } ?>
    <form method="post">
        <label for="current_password">Current Password:</label>
        <input type="password" name="current_password" id="current_password"><br>

        <label for="new_password">New Password:</label>
        <input type="password" name="new_password" id="new_password"><br>

        <input type="submit" value="Change Password">
    </form>
</body>

</html>