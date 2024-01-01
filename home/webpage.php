<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Campus App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    .footer {
      /* position: fixed; */
      left: 0;
      bottom: 0;
      width: 100%;
      height: 180;
      background-color: gray;
      color: white;
      text-align: center;
    }

    .responsive {
      width: 100%;
      height: auto;
    }

    site-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px;
    }

    .logo img {
      height: 50px;
    }

    @media (min-width: 900px) {
      .logo img {
        height: 50px;
      }
    }

    body {
      font-family: Helvetica;
      margin: 0;
    }

    a {
      text-decoration: none;
      color: #000;
    }

    .site-header {
      border-bottom: 1px solid #ccc;
      padding: .5em 1em;
    }

    .site-header::after {
      content: "";
      display: table;
      clear: both;
    }

    .site-identity {
      float: left;
    }

    .site-identity h1 {
      font-size: 1.5em;
      margin: .7em 0 .3em 0;
      display: inline-block;
    }

    .site-identity img {
      max-width: 55px;
      float: left;
      margin: 0 10px 0 0;
    }

    .dropbtn {
      background-color: #3498DB;
      color: white;
      padding: 10px;
      font-size: 16px;
      border: none;
      cursor: pointer;

      padding: 1em 2.1em 1.1em;
      border-radius: 3px;
      margin: 8px 8px 8px 8px;
      color: #fbdedb;
      background-color: #fbdedb;
      display: inline-block;
      background: #e74c3c;
      -webkit-transition: 0.3s;
      -moz-transition: 0.3s;
      -o-transition: 0.3s;
      transition: 0.3s;
      font-family: sans-serif;
      font-weight: 800;
      font-size: .85em;
      text-transform: uppercase;
      text-align: center;
      text-decoration: none;
      -webkit-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
      -moz-box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
      box-shadow: 0em -0.3rem 0em rgba(0, 0, 0, 0.1) inset;
      border-radius: 50em !important;
      margin-left: 1300px;
      margin-top: -80px;


    }

    .dropbtn:hover,
    .dropbtn:focus {
      background-color: #2980B9;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: lightblue;
      min-width: 160px;
      overflow: auto;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
      margin-left: 1300px;


    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
    }

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .dropdown a:hover {
      background-color: white;
    }

    .show {
      display: block;
    }

    h1 {
      text-shadow: -4px 4px 6px dimgrey;
      /* add shadow */
      font-size: 300%;
      /* increasing the font size */
    }
  </style>
</head>
<header>
  <header class="site-header">
    <div class="site-identity">
      <a href="webpage.php"><img src="brandlogo - Copy (2).jpg" alt="Site Name" /></a>
      <h1><a href="#"><b>
            <font size="10" style="color:brown">Campus Shuttle APP </p>
            </font>
          </b></a></h1>




    </div>



    <div class="dropdown">
      <button onclick="myFunction()" class="dropbtn">Account</button>


      <div id="myDropdown" class="dropdown-content">
        <!-- <a href="#home">Personal Info</a> -->
        <a href="../Login/changePassword.php">Change Password</a>
        <a href="../Login/logout.php">Logout</a>
      </div>

      <div class="alert">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <strong>Alerts!</strong>

        <?php

        // Start the session
        session_start();

        // Check if the user is logged in
        if (!isset($_SESSION['user_id'])) {
          // Redirect the user to the login page
          header('Location: ../Login/login.php');
          exit;
        }

        // Get the user ID from the session
        $user_id = $_SESSION['user_id'];


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          $message = $_POST['message'];
        }
        ?>
        <?php
        if (isset($message)) : ?>
          <div class="notification">
            <?php echo htmlspecialchars($message); ?>
          </div>
        <?php endif; ?>

      </div>
      <br>




      <script>
        /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
        function myFunction() {
          document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown if the user clicks outside of it
        window.onclick = function(event) {
          if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
              var openDropdown = dropdowns[i];
              if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
              }
            }
          }
        }
      </script>



    </div>

    </a>
  </header>
  </style>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

  <a class="navbar-brand" href="#">



    <nav class="navbar navbar-expand-lg-sm -body-tertiary bg-secondary navbar-dark">

      <div class="container-fluid">


        <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <!-- <li class="nav-item">


                <a class="nav-link active dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Routes
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="routename.php">List of Routes</a></li>
                  <li><a class="dropdown-item" href="routemap.html"> View Routes Map</a></li>
                </ul>
              </li> -->


              <!-- <li class="nav-item">

                <a class="nav-link active" href="form.html"> Inbox</a>

              </li> -->
              <li class="nav-item">

                <a class="nav-link active" href="routename.php "> Routes</a>

              </li>
              <li class="nav-item">

                <a class="nav-link active" href="routemap.html "> Routes Map</a>

              </li>

              <li class="nav-item">

                <a class="nav-link active" href="schedulshow.php "> Schedule</a>

              </li>
              <!-- <li class=" nav-item">

                <a class="nav-link active" href="">Location</a>

              </li> -->
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info" type="submit">Search </button>



              </form>
          </div>
      </div>
    </nav>
  </a>
  </div>
  </nav>

  <body>


    <img src="logo.jpg" alt="Nature" class="responsive" width="600" height="400">











    <body>


      <div class="footer">
        <p></p>CONTACT US </p>
        <p> 9735622560</p>
        <p>CSA@MSU.edu</p>
        <p>Copyright &copy; <script>
            document.write(new Date().getFullYear())
          </script>
        </p>

      </div>


    </body>

</html>