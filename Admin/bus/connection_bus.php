<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shuttleapp";

if (!$con = mysqli_connect($dhhost, $dbuser, $dbpass, $dbname)) {
  die("falied to connect");
} else {
  echo "Connected sucessfully";
}
