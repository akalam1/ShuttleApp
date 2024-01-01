<?php
session_start(); // start the session

// // unset all of the session variables
$_SESSION = array();
// unset all the values in the session array
// session_unset();

// destroy the session
session_destroy();

// redirect the user back to the home page
header("Location: login.php");
exit;
