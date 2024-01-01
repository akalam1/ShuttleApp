<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Campus App</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
 </head>
 <head>
  <style>
  body {
    background-color:white;
  }
  .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: gray;
   color: white;
   text-align: center;
}
  </style>

  </head>
</style>
<header> 
<center><p style="color:rgb(27, 58, 70)" ><b><font size  ="10" bgcolor ="blue" >Sharanam Shah Resort </p></font> </b></center>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <nav class="navbar navbar-expand-lg-sm -body-tertiary bg-success navbar-dark">
    <div class="container-fluid">
     <img src="C:\Users\shara\Downloads\images (1).png" alt="Logo" width="80" height="80" class="d-inline-block align-text-top">
     <nav class="navbar navbar-expand-sm bg-success navbar-dark">
      
     
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
           
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="337.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="yurts.html">Yurts</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="activities.html">Activities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="reservation.php">Reservation</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="comment.php">Comments</a>
        </li>
      </ul> 
    </nav>
  </header>
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$firstname  = test_input($_POST["firstname"]);
			$lastname  = test_input($_POST["lastname"]);
			$street  = test_input($_POST["street"]);
			$city  = test_input($_POST["city"]);
			$state  = test_input($_POST["state"]);
			$zipcode  = test_input($_POST["zipcode"]);
            $checkin = test_input($_POST["checkin"]);
			$checkout = test_input($_POST["checkout"]);
			$people  = test_input($_POST["people"]);
			$roomtype = test_input($_POST["roomtype"]);
			$phone = test_input($_POST["phone"]);
			$email = test_input($_POST["email"]);
			$payment = test_input($_POST["payment"]);
			$card = test_input($_POST["card"]);
			$comments = test_input($_POST["comments"]);
      $totalCharge = 0;
      $numNights = $checkout ;
      


      echo "<table>";
  
			echo "<h2>Thank You " . $firstname ." " .$lastname. " for your reservation. </h2>";
      echo "<h6> The following are the information that you entered:</h6>";
      
      echo "<tr><td><p>Number & Street :</td><td>" . $street . "</p></td></tr>";
      echo "<tr><td><p>City:</td><td>" . $city . "</p></td></tr>";
      echo "<tr><td><p>State:</td><td>" .  $state . "</p></td></tr>";
      echo "<tr><td><p>Zip Code:</td><td>" . $zipcode. "</p></td></tr>";
      echo "<tr><td><p>Check in Date:</td><td>" .  $checkin. "</p></td></tr>";
      echo "<tr><td><p>Check out Date:</td><td>" . $checkout . "</p></td></tr>";
      echo "<tr><td><p>Room Type:</td><td>" . $roomtype . "</p></td></tr>";
      echo "<tr><td><p>Number of people :</td><td>" . $people . "</p></td></tr>";
      echo "<tr><td><p>Number of Nights :</td><td>" . $numNights . "</p></td></tr>";
      echo "<tr><td><p>Email:</td><td>" . $email . "</p></td></tr>";
      echo "<tr><td><p>Phone Number  :</td><td>" .  $phone . "</p></td></tr>";

      echo "<tr><td><p>Credit Card :</td><td>" .  $payment . "</p></td></tr>";

      echo "<tr><td><p>Card Number :</td><td>" .$card . "</p></td></tr>";
      echo "<tr><td><p>Special Request :</td><td>" . $comments . "</p></td></tr>";
    
      echo "</table>";








		}
	
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
      include('index.php');
		}
	?>
  <!DOCTYPE html>
<html>
<head>
  <title>Two-Element Table</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
  </style>
</head>
<div class="footer">
    <p> Copyright&copy; 2023 Sharanam Shah <br>
    email.shranam.shah@mail.montclair.edu</p> 
  </div>
  
<?php
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			$roomtype = $_POST['roomtype'];
			$checkin = ($_POST['checkin']);
			$checkout = ($_POST['checkout']);
			$numNights = (strtotime($checkout) - strtotime($checkin)) / (60 * 60 * 24);
			switch ($roomtype) {
				case 'King':
					$roomtype = 200;
					break;
				case 'Queen':
					$roomtype = 150;
					break;
				case 'Suite':
					$roomtype = 300;
					break;
				default:
					$roomtype = 0;
			}
			
			$taxRate = 0.07;
			$totalCharge = ($roomtype * $numNights) * (1 + $taxRate);
      echo "<table>";
      echo "<tr><th><p>Total Charge $ :</th><th>".number_format($totalCharge, 2)."</p></th></tr>";
    
      echo "</table>";
      
			
		}
	?>