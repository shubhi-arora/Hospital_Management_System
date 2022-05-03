
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
    <link rel="stylesheet" href="styles.css" />
    <title>Signup</title>
  </head>
  <body>
    <!-- navbar -->
    <div id="navbar">
      <div class="img-heading">
        <a href="index.html">
          <img src="IIITU_logo.gif" alt="IIITU" id="iiitulogo" />
        </a>
        <h1 id="heading">IIIT Una Clinic</h1>
      </div>
      <div class="nav-links">
        <ul>
          <li><a class="nav-link" href="index.html">Home</a></li>
          <li><a class="nav-link" href="doctors.html">Doctors</a></li>
          <li><a class="nav-link" href="query.html">Query</a></li>
          <li><a class="nav-link" href="about.asp">About</a></li>
          <li class="login-signup">
            <a href="login.html">Log in</a>
          </li>
        </ul>
      </div>
      <div class="burger">
        <i class="fas fa-bars"></i>
      </div>
    </div>
    <!-- navbar end -->
    <!-- form -->


<h1>Your appointment is booked.
    <br>
    Appointment No.: 
    <?php
   
   echo $_SESSION['pid'];
   ?>
</h1>
</body>
</html>