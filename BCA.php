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

  <title>Welcome to BRC</title>
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
      background-color: rgb(76, 8, 185);
      color: white;
      text-align: center;
    }
  </style>
</head>

<body class="p-0 m-0 border-0 bd-example">

  <!-- Example Code -->

  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>Burdwan Raj College</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="\BRC"><strong>Home</strong></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://www.burdwanrajcollege.ac.in/"><strong>About</strong></a>
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
      </div>
      <div>

        <ul>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>
              <img src="https://img.icons8.com/metro/26/000000/guest-male.png"> <?php echo $_SESSION['username'] ?></strong>
            </a>
            
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="profile.php">Profile</a></li>
              <li><a class="dropdown-item" href="Jokes.php">Some Jokes</a></li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
              

            </ul>
        </ul>

      </div>


  </nav>

  <h1 align="center">
    Welcome to
    <strong>BCA Department of Burdwan Raj College...</strong>
  </h1>
  <h2 align="center">
    <strong>"Bachelor in Computer Application"</strong>
  </h2>

  <div class="container mt-4">

    <h3 align="center"><?php echo "Welcome " . $_SESSION['username'] ?>! You can now use this website</h3>
    <hr>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>