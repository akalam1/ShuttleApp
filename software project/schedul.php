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
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <style>
  
  
  .footer {
   position: sticky;
   left: 0;
   bottom: 0;
   width: 100%;
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
body {
  background-color:white;
}
body {
  background-image: url("C:\xampp\htdocs\software project\2022-09-02-shuttle-news.jpg.5.1x.generic.jpg");
}
.table-hover tbody tr:hover td, 
    .table-hover tbody tr:hover th {background-color: rgb(144, 224, 238);}
 h3
         { 
            text-shadow: -4px 4px 6px dimgrey; /* add shadow */
            font-size: 300%; /* increasing the font size */
         }

  </style>
  </head>
  <header>
  <header class="site-header">
  <div class="site-identity">
    <a href="webpage.php"><img src="brandlogo - Copy (2).jpg" alt="Site Name" /></a>
    <h1><a href="#"><b><font size  ="10" style="color:brown" >Campus Shuttle APP </p></font>  </b></a></h1>
     
  
    
   
    
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
           <li class="nav-item">
             
             <a class="nav-link active dropdown-toggle" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Routes
             </a>
             <ul class="dropdown-menu">
               <li><a class="dropdown-item" href="routename.php">Route Name</a></li>       
              <li><a class = "dropdown-item" href="routemap.html"> View Routes</a></li>
             </ul>
           </li>
           
           <li class="nav-item">
             
             <a class="nav-link active" href="notification.php">Notification</a>
             
           </li>

           <li class="nav-item">
             
             <a class="nav-link active" href="Schedul.php">Schedul</a>
             
           </li>
           <li class="nav-item">
             
           <a class="nav-link active" href="">Location</a>
           
         </li>
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

 

  <div class="container">
  <center><b><h1>Campus Shuttle Schedul</h1></center>
  <table class="table table-hover"  style="margin-left:auto; margin-right:auto;  text-align:center; "  border="7" width :"80% ">
          


  <?php

include ('schedulshow.php');

?>
  </table>
  
  <center><h5><b> NOTE: Each Shuttle will be repeat after 1 hours in the same location and lot number.</h5></center>


  <center><h4>If you have any questions or concerns about the campus shuttle service, please contact Us:</h4></b> </center>
  <br>






<body>
  

<div class="footer">
<p></p>CONTACT US </p>
<p> 9735622560</p> 
<p>CSA@MSU.edu</p> 
</div>
 
 </body>
</html>
 
 </body>
</html>