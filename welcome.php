<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
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
    <link rel="stylesheet" href="style1.css" />
    <link rel="stylesheet" href="style.css">
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
              <a class="nav-link" aria-current="page" href="\BRC"><strong>Home</strong></a>
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
              <li class="nav-item">
              <a class="nav-link" aria-current="page" href="Contact_us.php"><strong>Contact us</strong></a>
            </li>
        </div>

  <ul>
  
      <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><strong>
              <img src="https://img.icons8.com/metro/26/000000/guest-male.png"><?php echo $_SESSION['username']?></strong> </a>
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="Jokes.php">Some Jokes</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                
                
              </ul>

    </ul>

</div>


</nav>

<h1 align = "center">
    Welcome to our Unofficial 
    <strong>Burdwan Raj College Website...</strong>
</h1>
<div class="container mt-4">
   
<h3 align = "center"><?php echo "Welcome ". $_SESSION['username']?>! You can now use this website</h3>
<hr>

</div>
<main>
          <div >
          <img
            src="image/bg.jpeg"
            class="image"
            style="width: 100%"
            height="400px"
          />
          </div>
         
     
      <div class="line" style="justify-content: center;">
        <div class="desk">
          <h1 align="center">PRINCIPAL</h2><br>
          <div class="imgdesk" align="center" >
            <img src="image/principal.png" alt="principal"  />
          </div>

          <h2 align="center"><strong> Dr. Niranjan Mandal</strong></h2><br>
          <hr>

          <h3 >
            It is a great privilege for me to welcome you all to Burdwan Raj
            College, a college which carries the rich legacy of a hundred and
            forty years and counting. As one of the oldest colleges in the state
            of West Bengal, our Institute is counted among the premier
            institutes of higher learning combining tradition, continuity, and
            innovation in the pursuit of excellence in higher education...
            <br />
            <a href="https://burdwanrajcollege.ac.in/"> Read More >></a>
          </h3>
          <hr>
        </div>
        <div class="para">
          <h2>WELCOME TO BURDWAN RAJ COLLEGE</h2>
          <h3>
            Established in 1881, Burdwan Raj College is one of the premier
            institutes of higher learning in the state of Bengal. It carries a
            glorious heritage and ranks amongst the oldest colleges of state. This
            picturesque campus of about seventeen acres is situated at the
            nerve-centre of the town by the side of the serenely beautiful
            Shyamsayar. <br /><br />
            From the very beginning Burdwan Raj College is recognized as an
            excellent academic institution where learning goes hand in hand with
            instilling values that transform human beings and the society. It has
            produced a galaxy of eminent personalities in various fields of arts,
            science, commerce, politics and general administration.
            <br /><br />
            Mere education for education's sake is not our goal; education with a
            mission to strengthen the human bond in the larger perspective of the
            globe is our emphasis. The College always feels the need of values
            that can unite human beings in a society which is torn by disquiet,
            disorder and disintegration and marches ahead in the quest of further
            advancement of quality and excellence.
          </h3>
        </div>
        <div class="notice">
          <h2>VISION</h2>
        <p>
          Build a solid foundation of education: from knowledge to wisdom
          and a commitment to the transformation of approach: from individual to
          collective. 
        </p>
          <h2>MISSION</h2>
          <p>
          Sahṛdayaṃ sāṃmanasyam avidveṣaṃ kṛṇomi vaḥ: “I
          make you emotionally sympathetic to each other, intellectually of the
          same mind and free from mutual jealousy”. 
        </p>
          <h2>OBJECTIVES</h2>
          
          <p> Inculcate
          confidence: from participation to leadership and enhance the spirit of
          inclusive sensitivity and togetherness ... Read more >>
        </p>
        </div>
      </div>
    </main>
    <footer>
      <div class="foot"><h2>QUICK CONTACT</h2>
        <p> 
        Aftab House, Frazer Avenue, Burdwan - 713104
        0342 - 2565841, 2657843
        info@burdwanrajcollege.ac.in
      </p>
</div>

      <h5 align="center">copyright &copy Burdwan Raj College</h5>
    </footer>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

