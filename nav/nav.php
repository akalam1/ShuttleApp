<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <!-- applying css here  -->

  <style>
    nav {
      position: relative;
      width: 100%;
      height: 50px;
      background-color: #34495e;
      border-radius: 8px;
      font-size: 0;
    }

    nav a {
      line-height: 50px;
      height: 100%;
      font-size: 15px;
      display: inline-block;
      position: relative;
      z-index: 1;
      text-decoration: none;
      text-transform: uppercase;
      text-align: center;
      color: wheat;
      cursor: pointer;
    }

    nav .animation {
      position: absolute;
      height: 100%;
      top: 0;
      z-index: 0;
      transition: all 0.5s ease 0s;
      border-radius: 8px;
    }

    a:nth-child(1) {
      width: 100px;
    }

    a:nth-child(2) {
      width: 110px;
    }

    a:nth-child(3) {
      width: 100px;
    }

    a:nth-child(4) {
      width: 100px;

    }



    nav .start-home,
    a:nth-child(1):hover~.animation {
      width: 100px;
      left: 0px;
      background-color: rgb(100, 165, 56);
    }

    nav .start-about,
    a:nth-child(2):hover~.animation {
      width: 110px;
      left: 100px;
      background-color: rgb(100, 165, 56);
    }

    nav .start-Schedule,
    a:nth-child(3):hover~.animation {
      width: 100px;
      left: 210px;
      background-color: rgb(100, 165, 56);
    }

    nav .start-Account,
    a:nth-child(4):hover~.animation {
      width: 100px;
      left: 310px;
      background-color: rgb(100, 165, 56);
    }
  </style>
</head>

<body>
  <div>
    <nav>
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Schedule</a>
      <a href="../Login/login.php">Account</a>
      <div class="animation start-Home"></div>
    </nav>
  </div>
</body>

</html>