<?php
if(isset($_POST['submit'])){

  $server="localhost:3307";
    $username="root";
    $password="";
    $con=mysqli_connect($server,$username,$password);
    if(!$con)
{
    die("connection to this database failed" . mysqli_connect_error());
}
    $con=mysqli_connect($server,$username,$password);
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=mysqli_query($con,"SELECT Name FROM `hospital`.`sign` where Email='$email' and Password='$password'");
    $_SESSION['sno']=$sno;
    if($sql)
    {
        
            if (mysqli_num_rows($sql) > 0) {
             { 
            header('Location:details.php');
             }
            } else {
              echo 'not found';
            }
     }
    else {
    echo 'Error: '.mysql_error();
        }
    
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles.css" />
    <title>Login</title>
  </head>
  <body>
    <!-- navbar -->
    <div id="navbar">
      <div class="img-heading">
        <a href="index.html">
          <img src="IIITU_logo.gif" alt="IIITU" id="iiitulogo" />
        </a>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400;700&family=Dancing+Script&family=Pacifico&display=swap"
          rel="stylesheet"
        />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet"
        />
        <script
          src="https://kit.fontawesome.com/5e62d29057.js"
          crossorigin="anonymous"
        ></script>
        <h1 id="heading">IIIT Una Clinic</h1>
      </div>
      <div class="nav-links">
        <ul>
          <li><a class="nav-link" href="index.html">Home</a></li>
          <li><a class="nav-link" href="doctors.html">Doctors</a></li>
          <li><a class="nav-link" href="query.htmls">Query</a></li>
          <li><a class="nav-link" href="about.html">About</a></li>
          <li class="login-signup">
            <a href="signup.html">Signup</a>
          </li>
        </ul>
      </div>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <!-- navbar end -->
    <!-- form -->
    <div class="form">
      <form action="login.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"
            >Email address</label
          >
          <input
            type="email"
            class="form-control"
            id="exampleInputEmail1"
            aria-describedby="emailHelp"
            name="email"
          />
          <div id="emailHelp" class="form-text">
            We'll never share your email with anyone else.
          </div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input
            type="password"
            class="form-control"
            id="exampleInputPassword1"
            name="password"
          />
          <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and
            numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </div>
        <input type="submit" class="btn btn-primary submit" name="submit" value="Submit"/>
      </form>
    </div>
    <!-- formEndsHere -->
  </body>
  <!-- bootstrapjs -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"
  ></script>
  <script src="./app.js"></script>
</html>
