<?php

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

  $process = "SELECT * FROM users WHERE email='$uname' AND password='$psw'";
  $res = mysqli_query($connection, $process);

  if (mysqli_num_rows($res) == 1) {
    echo "Successful login!";
  } else {
    echo "Incorrect Email/Password";
  }

}

?>
