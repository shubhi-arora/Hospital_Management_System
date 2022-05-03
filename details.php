<?php

$insert=false;
if(isset($_POST['book'])){
  session_start();
  $server="localhost:3307";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);
  if(!$con)
  {
      die("connection to this database failed" . mysqli_connect_error());
  }
  $name=$_POST['name'];
  $age=$_POST['age'];
  $email=$_POST['email'];
  $gender=$_POST['gender'];
  $street=$_POST['street'];
  $city=$_POST['city'];
  $state=$_POST['state'];
  $pincode=$_POST['pincode'];
  $history=$_POST['history'];
  $date=$_POST['date'];
  $time=$_POST['time'];
  $doctor=$_POST['doctor'];
  $uid_sql="SELECT sno from `hospital`.`sign` where `email`='$email'";
  // $name_sql="SELECT name from `hospital`.`sign` where `email`='$email'";
  // $email_sql="SELECT email from `hospital`.`sign` where `email`='$email'";
  $result=$con->query(($uid_sql));

  $uid = $result->fetch_array()[0] ?? '';
  // $namee=$result->fetch_array()[1] ?? '';
  // $emaill=$result->fetch_array()[2] ?? '';

  $sql="INSERT INTO `hospital`.`pdetail` (`uid`, `name`, `age`, `gender`, `street`, `city`, `state`, `pincode`, `history`, `date`, `time`, `doctor`,`email`) VALUES ( '$uid','$name', '$age', '$gender', '$street', '$city', '$state', '$pincode', '$history', '$date', '$time', '$doctor','$email');";
  $pid_sql="SELECT pid from `hospital`.`pdetail` where `email`='$email'";
  $pid_result=mysqli_query($con,$pid_sql);
  $pid;
  $row=mysqli_fetch_array($pid_result);
  $pid=$row;
  echo $pid;
  if($con->query($sql)==true)
  $insert=true;
  else
  echo "ERROR: $sql <br> $con->error";
 
  
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400;700&family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/5e62d29057.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="styles.css" />
  <title>Details</title>
</head>

<body>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;900&family=Ubuntu:wght@300;400;700&family=Dancing+Script&family=Pacifico&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/5e62d29057.js" crossorigin="anonymous"></script>
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
    <h1 class="details-h1">Welcome XYZ. Book your appointment!</h1>
    <div class="form-signup">
      <div class="mb-3">
      <?php
      if($insert)
      echo "<p>Data Inserted Successfully</p>";
      ?>
      </p>
      <form action="details.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="name" class="form-control" id="exampleInputEmail1" name="name" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Age</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="age" aria-describedby="emailHelp" />
        </div>
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
          <label for="exampleInputEmail1" class="form-label">Gender</label>
          <br>
          <input type="text" name="gender" list="gender" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <datalist id="gender">
            <option value="Female">
            <option value="Male">
            <option value="Transgender">
          </datalist>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Street Address</label>
          <input type="text" class="form-control" name="street" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">City</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="city" aria-describedby="emailHelp" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">State</label>
          <input type="text" class="form-control" name="state" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">PinCode</label>
          <input type="text" class="form-control" name="pincode" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Any medical history? Please specify in detail.</label>
          <input type="text" class="form-control" name="history" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Select date and time of an appointment</label>
          <input type="date" class="form-control" name="date" id="exampleInputPassword1" />
        </div>
        <div class="mb-3">

          <label for="appt">Select a time</label>
          <br>
          <?php
          $start = "9:00";
          $end = "19:00";
          $tStart = strtotime($start);
          $tEnd = strtotime($end);
          $tNow = $tStart;
          ?>
          <select name="time" value="Select" id="exampleInputEmail1" aria-describedby="emailHelp">
            <?php
            while ($tNow <= $tEnd) {
            ?>
              <option>
                <?php
                echo date("H:i", $tNow)
                ?>
              </option>;
            <?php
              $tNow = strtotime('+30 minutes', $tNow);
            }
            ?>
          </select>
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Doctor</label>
          <br>
          <input type="text" name="doctor" list="doctor" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <datalist id="doctor">
            <option value="Paediatrician">
            <option value="Dentist">
            <option value="Cardiologist">
            <option value="Oncologist">
            <option value="Neurologist">
          </datalist>
        </div>
        <input type="submit" class="btn btn-primary submit" name="book" value="Book an Appointment"/>
        <!-- time slot drop down
          doctors list select -->
          <?php
          
          ?>
  </body>

</html>