<?php

session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
  header("location: login.php");
}


?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>Welcome</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    html,
    body {
      height: 100%;
      width: 100%;
    }

    body {
      background-color: rgb(187, 221, 239);
    }

    h1 {
      margin: auto;
      background-color: rgb(7, 143, 222);
      color: white;
      text-align: center;
    }
  </style>
</head>

<body class="p-0 m-0 border-0 bd-example">

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="https://www.burdwanrajcollege.ac.in/"><strong>Burdwan Raj College</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="\BRC"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><strong>About</strong></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <strong>Department</strong>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="BCA.php">BCA</a></li>
              <li><a class="dropdown-item" href="BBA.php">BBA</a></li>

            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="Contact_us.php"><strong>Contact us</strong></a>
          </li>
        </ul>
        <ul>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>
                <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><?php echo $_SESSION['username'] ?></strong> </a>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="BCA.php">Profile</a></li>
              <li><a class="dropdown-item" href="Jokes.php">Some Jokes</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>

            </ul>

        </ul>
        <div>
        </div>
  </nav>
  <h1 align="center">
    Contact_us
  </h1>
  <div align="center">
    <h2>Location: Aftab House, Frazer Avenue, Burdwan - 713104
    <br><br>
    <img src="image/map.png" alt="mag">
    <br><br>
    To view in Map <a href="https://www.google.com/maps/place/Burdwan+Raj+College/@23.246159,87.856513,14z/data=!4m5!3m4!1s0x0:0xfcf06b2d332624d1!8m2!3d23.2461589!4d87.8565126?hl=en-US">Click Here >></a>
    <br><br>

    Contact: 0342 - 2565841, 2657843
    <br>

    Email: info@burdwanrajcollege.ac.in
    <br>
    About more:<a href="https://burdwanrajcollege.ac.in/">Visit here</a>
</h2>
<div>
    <button><a href="welcome.php">Home</a></button>
</div>
</div>
Burdwan Raj College © 2022. All Rights Reserved.
    

  <!-- End Example Code -->
</body>

</html>