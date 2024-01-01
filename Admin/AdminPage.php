<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Admin Page</title>

  <!-- <h2> Shuttle Admin Portal</h2> -->


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    .flex-container {
      display: flex;
      flex-flow: row wrap;



    }

    .card_options {
      font-family: Arial, sans-serif;
      margin: 1% auto;
      text-align: center;
      max-width: 70%;
      padding: 4%;
      background-color: #fff;

      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(222, 9, 9, 0.3);
    }

    body {
      background-color: white;
    }

    .card {
      font-family: Arial, sans-serif;
      margin: 2% auto;
      text-align: center;
      max-width: 15%;
      padding: 2%;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 0px 10px rgba(247, 9, 9, 0.3);
    }
  </style>

</head>

<body>
  <!-- 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand"href="#">Admin Options</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      
	   
	 
      <li>
	  <a class="nav-link" href= schedule.html >View Schedule</a>
	  </li>
    <li>
      <a class="nav-link" href= ./routes/routes.html >Manage Routes</a>
      </li>
      <li>
        <a class="nav-link" href= ./bus/manage_bus.php >Manage Bus</a>
        </li>
    <li>
      <a class="nav-link" href=ShuttleActivity.html>Shuttle Activity</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href=ViewLocation.html>View Location</a>
    </li>
    <li>
      <a class="nav-link" href= notification.php >Send Alerts</a>
      </li>
	  </ul>
	
  
  </div>
  
</nav> -->


  <nav>

    <?php

    include 'darktheme.php';

    ?>
  </nav>
  <section class="admin_portale">

    <div class="card_options ">
      <h2 style=" font-size: 300%; ">Admin Portal</h2>
    </div>

  </section>


  </section>
  <section>

    <div class="flex-container">
      <div class="card">
        <h2><a href="manage_Schedule.php">View Schedule</a></h2>
      </div>
      <div class="card">
        <h2> <a href="./routes/routes.html "> Manage Routes</a> </h2>
      </div>
      <div class="card">
        <h2><a href="./bus/manage_bus.php ">Manage Bus</a></h2>
      </div>
    </div>
    <div class="flex-container">
      <div class="card">
        <h2><a href="shuttleactivity.php">Shuttle Activity</a></h2>
      </div>
      <!-- <div class="card">
        <h2><a href="ViewLocation.html">View Location</a></h2>
      </div> -->
      <div class="card">
        <h2><a href="notification.php">Send Alert</a></h2>
      </div>
      <div class="card">
        <h2><a href="user_info.php">User Info</a></h2>
      </div>
    </div>
  </section>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



</body>

</html>