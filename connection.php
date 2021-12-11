<?php

session_start();
$_SESSION['firstname'] = $_POST['fname'];
$_SESSION['lastname'] = $_POST['lname'];

// initialising the variables

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['password'];

$errors = array();
$result;

// making the database connection

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$database = "signup";

$connection = mysqli_connect($dbHost, $dbUser, $dbPass, $database) or die ("Sorry, we could not connect to the database");

// check DB for existing email and preventing SQL injection

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result) > 0){
   echo "Email address has already been taken.";
} else {
   $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$hashed_password')";


// Register the user if no error

if(count($errors) == 0){
  $hashed_password = md5($password); // this will encrypt the password
  $sql = "INSERT INTO users (firstname, lastname, email, password) VALUES ('$fname', '$lname', '$email', '$hashed_password')";
  $stmt = mysqli_stmt_init($connection);

  // header('location: home.php');
}

if (mysqli_query($connection, $sql)) {
  $_SESSION["sub"] = "1";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
}

?>
