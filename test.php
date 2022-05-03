<?php

$insert=false;
// if(isset($_POST['book'])){
  $server="localhost:3307";
  $username="root";
  $password="";
  $con=mysqli_connect($server,$username,$password);
  if(!$con)
  {
      die("connection to this database failed" . mysqli_connect_error());
  }
//   $name=$_POST['name'];
//   $age=$_POST['age'];
//   $email=$_POST['email'];
//   $gender=$_POST['gender'];
//   $street=$_POST['street'];
//   $city=$_POST['city'];
//   $state=$_POST['state'];
//   $pincode=$_POST['pincode'];
//   $history=$_POST['history'];
//   $date=$_POST['date'];
//   $time=$_POST['time'];
//   $doctor=$_POST['doctor'];
//   $uid_sql="SELECT sno from `hospital`.`sign` where `email`='$email'";
  // $name_sql="SELECT name from `hospital`.`sign` where `email`='$email'";
  // $email_sql="SELECT email from `hospital`.`sign` where `email`='$email'";
//   $result=$con->query(($uid_sql));
$email='somya@gmail.com';
//   $uid = $result->fetch_array()[0] ?? '';

  $sql="INSERT INTO `hospital`.`pdetail` (`uid`, `name`, `age`, `gender`, `street`, `city`, `state`, `pincode`, `history`, `date`, `time`, `doctor`,`email`) VALUES ( '$uid','$name', '$age', '$gender', '$street', '$city', '$state', '$pincode', '$history', '$date', '$time', '$doctor','$email');";
  $pid_sql="SELECT pid from `hospital`.`pdetail` where `email`='$email'";
  $pid_result=$con->query(($pid_sql));
 $pid = $pid_result->fetch_array()[1] ?? '';
echo $pid;
  if($con->query($sql)==true)
  $insert=true;
  else
  echo "ERROR: $sql <br> $con->error";
 
  
//   }
?>