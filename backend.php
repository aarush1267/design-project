<?php

session_start();

// Making Connection To The Database

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "signup";

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $database) or die ("Sorry, we could not connect to the database");

// Login System

if(isset($_POST['uname']) && isset($_POST['psw'])) {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
  $loginPassword = md5($psw);
      
  $process = "SELECT * FROM users WHERE email='$uname' AND password='$loginPassword'";
  $res = mysqli_query($connection, $process);

  if (mysqli_num_rows($res) == 1) {
    $row = mysqli_fetch_assoc($res);

    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];

    $_SESSION['sub'] = "1";
  } else {
    echo "Incorrect Email/Password";
  }

}

?>
