<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
if (isset($_POST['username']) && isset($_POST['password']) &&
        isset($_POST['email']) && isset($_POST['gender']) &&
        isset($_POST['phone']) && isset($_POST['save_password']))
        {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $phone = $_POST['phone'];
        $save_password = $_POST['save_password'];

if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM register_here WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken";
                    echo "<script type='text/javascript'>alert('$username_err');</script>"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
    echo "<script type='text/javascript'>alert('$password_err');</script>";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
    echo "<script type='text/javascript'>alert('$password_err');</script>";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    echo "<script type='text/javascript'>alert('$password_err');</script>";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO register_here (username, password, email, gender, phone, save_password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $password, $email, $gender, $phone, $save_password);

        // Set these parameters
        $param_username = $username;
        $password = password_hash($password, PASSWORD_DEFAULT); //if we want hashed password

        // Try to execute the query
        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
        }

?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>Register | BRC</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="p-0 m-0 border-0 bd-example">

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
          <ul>
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <strong>Sign-in</strong></a>
      </a>

                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="login.php">login</a></li>
                  <li><a class="dropdown-item" href="register.php">Register</a></li>
                  
                </ul>
              </li>
              </ul>
              <div>
        </div>
    </nav>

<div class="container mt-4">
<h3><strong>Please Register Here:</strong></h3>
<hr>
<form action="register.php" method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputName"><strong>Username</strong></label>
      <input type="text" class="form-control" name="username" id="inputName" placeholder="Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword"><strong>Password</strong></label>
      <input type="password" class="form-control" name ="password" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
      <label for="inputPassword"><strong>Confirm Password</strong></label>
      <input type="password" class="form-control" name ="confirm_password" id="inputPassword" placeholder="Confirm Password">
    </div>
  <div class="form-group">
    <label for="inputEmail"><strong>Email-ID</strong></label>
    <input type="text" class="form-control" name="email" id="inputEmail" placeholder="example123@gmail.com">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputGender"><strong>Gender: </strong></label>
      <input type="Radio" name="gender" id="inputGender" value="Male" required> Male
      <input type="Radio" name="gender" id="inputGender" value="Female" required> Female
    </div>
    </div>

  <div class="form-group col-md-2">
      <label for="inputPhone"><strong>Phone number</strong></label>
      <input type="text" class="form-control"  name="phone" id="inputPhone">
    </div>
        
    <div class="form-group col-md-6">
      <label for="inputSavePassword"><strong>Save_Password</strong></label>
      <input type="text" class="form-control" name ="save_password" id="inputSavePassword" placeholder="Enter Password one more to remember">
    </div>
    
 
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
      <strong>Check me out</strong>
      </label>
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button><br> <Strong>Already have an Account ? </Strong><button type="link" class="btn btn-primary"><a class="nav-link" aria-current="page" href="login.php">Login here</a></button>
  </div>
</form>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>