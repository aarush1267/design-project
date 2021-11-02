<?php
session_start();

if (isset($_SESSION['sub'])) {
  header("location:home.php") // yes logged in redirect to homepage
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
body {
  font-family: Arial;
  color: #E0E0E0;
}

.split {
  height: 100%;
  width: 160%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
  background-color: ;
}

.right {
  right: 0;
  background-color: red;
}

.centered {
  position: absolute;
  top: 50%;
  left: 17%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
</style>
</head>
<body style="background-color: #E0E0E0">

<div class="split left">
  <div class="centered">
    <!DOCTYPE html>
<html>
<title>Log In or Sign Up | Feed</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

input[type=login]:hover {
  background-color:#45a049;
}

.signupbtn {
  width: 170px;
  padding: 10px 18px;
  background-color: blue;
  text-decoration: none;
  outline:none;
}

.forgotPass {
  width: 170px;
  padding: 10px 18px;
  background-color: blue;
  text-decoration: none;
  outline:none;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 33% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid black;
  border-radius: 10px;
  margin-left: -50px;
  width: 100%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover
.close:focus {
  color: red;
  cursor: pointer;
}

.ema{
  border-radius: 10px;
  border: 2px solid black;
  outline: none;
  font-family: inherit;
}

.ema::placeholder{
  color:black;
}

.ema:focus{
  border:2px solid orange;
}

.pass{
  border-radius: 10px;
  border: 2px solid black;
  outline: none;
  font-family: inherit;
}

.pass::placeholder{
  color:black;
}

.pass:focus{
  border: 2px solid orange;
}
</style>
</head>
<body>

<style>

button[type=submit]:hover{
  background-color: orange;
  box-shadow: 0 10px 100px rgba(0,0,0,.40);
}

button[type=button]:hover{
  background-color: orange;
  box-shadow: 0 10px 100px rgba(0,0,0,.40);
}
</style>

  <form class="modal-content animate" action="javascript:void(0)" method="post">
    <div class="imgcontainer">
      <span onclick="location.href='index.php'" class="close" title="Close Modal"></span>
      <img src="https://cdn4.iconfinder.com/data/icons/small-n-flat/24/user-alt-512.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="username"><b></b></label>
      <i style="color: green; margin-top:25px; margin-left:393px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="emailYes"></i>
      <i style="color: red; margin-top:25px; margin-left:393px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="emailNo"></i>
      <input class="ema" id="ema" type="text" placeholder="Email Address" name="uname">
      <i style="color: green; margin-top:25px; margin-left:393px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="passwordYes"></i>
      <i style="color: red; margin-top:25px; margin-left:393px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="passwordNo"></i>

      <label for="psw"><b></b></label>
      <input class="pass" id="pswd" type="password" placeholder="Password" name="psw">

      <button type="submit" id="loginBtn" class="ltn" style="border-radius:10px; outline:none; font-family:inherit; color:white; font-size:17px" name="loginbutton"><b>Log In</b></button>
      <label>
        <small style="position:fixed; margin-top: 62px; font-size:20px; margin-left:-377px; color:red; visibility:hidden" id="loginError"></small>
        <small style="position:fixed; margin-top: 62px; font-size:20px; margin-left:-321px; color:red; visibility:hidden" id="emailError">Please enter your email.</small>
        <small style="position:fixed; margin-top: 62px; font-size:20px; margin-left:-337px; color:red; visibility:hidden" id="passError">Please enter your password.</small>
    </div>

<div class="container">
  <hr style="margin-top:-10px">
</div>

    <div class="container">
      <center><button type="button" class="signupbtn" id="sgnbtn" style="border-radius:10px; margin-top:-50px; font-family:inherit; color:white; font-size:15px; margin-left: -210px"><b>Sign Up</b></button></center>
      <center><button type="button" class="forgotPass" id="forgotPass" style="border-radius:10px; margin-top:-47px; position:fixed; font-family:inherit; color:white; font-size:15px; margin-left:20px"><b>Forgot Password?</b></button></center>
    </div>
  </form>
</div>

<script type='text/javascript'>

var loginEmail = document.getElementById('ema');
var loginPassword = document.getElementById('pswd');
var loginBtn = document.getElementById('loginBtn');
var loginError = document.getElementById('loginError');
var emailError = document.getElementById('emailError');
var passError = document.getElementById('passError');

///////////////////

var emailYes = document.getElementById('emailYes');
var emailNo = document.getElementById('emailNo');
var passwordYes = document.getElementById('passwordYes');
var passwordNo = document.getElementById('passwordNo');

loginBtn.addEventListener("click", function(e) {
  e.preventDefault();
  if(loginEmail.value === "" && loginPassword.value === "") {
    // error messages
    loginError.style.visibility = 'visible';
    loginError.innerText = "Please enter your email and password.";
    emailError.style.visibility = 'hidden';
    passError.style.visibility = 'hidden';
    // icons
    emailNo.style.visibility = 'visible';
    passwordNo.style.visibility = 'visible';
    emailYes.style.visibility = 'hidden';
    passwordYes.style.visibility = 'hidden';
    // borders
    loginEmail.style.border = '2px solid red';
    loginPassword.style.border = '2px solid red';
  } else if (loginEmail.value === "") {
    // error messages
    emailError.style.visibility = 'visible';
    passError.style.visibility = 'hidden';
    loginError.style.visibility = 'hidden';
    // icons
    emailNo.style.visibility = 'visible';
    passwordYes.style.visibility = 'visible';
    emailYes.style.visibility = 'hidden';
    passwordNo.style.visibility = 'hidden';
    // borders
    loginEmail.style.border = '2px solid red';
    loginPassword.style.border = '2px solid green';
  } else if (loginPassword.value === "") {
    // error messages
    loginError.style.visibility = 'hidden';
    emailError.style.visibility = 'hidden';
    passError.style.visibility = 'visible';
    // icons
    passwordNo.style.visibility = 'visible';
    emailYes.style.visibility = 'visible';
    emailNo.style.visibility = 'hidden';
    passwordYes.style.visibility = 'hidden';
    // borders
    loginEmail.style.border = '2px solid green';
    loginPassword.style.border = '2px solid red';
  } else {
    // error messages
    loginError.style.visibility = 'hidden';
    emailError.style.visibility = 'hidden';
    passError.style.visibility = 'hidden';
    // icons
    emailYes.style.visibility = 'visible';
    passwordYes.style.visibility = 'visible';
    emailNo.style.visibility = 'hidden';
    passwordNo.style.visibility = 'hidden';
    // borders
    loginEmail.style.border = '2px solid green';
    loginPassword.style.border = '2px solid green';
  }
});

</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');
.popup{
	  background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: absolute;
    left:0px;
    top: -200vh;
    justify-content: center;
    align-items: center;
}
.popup.active {
  top: 0;
}
.popup-content{
    position:absolute;
    top:48%;
    left:32%;
    transform:translate(-50%,-50%) scale(0.8);
	  height: 610px;
    width: 500px;
    background: #fff;
    opacity:0;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 10px 100px rgba(0,0,0,.80);
    transition: all 200ms ease-in-out;
}
  .popup.active .popup-content {
  transform:translate(-50%,-50%) scale(1);
    opacity:1;
  }
.name1::placeholder{
  color: black;
}

.name2::placeholder{
  color: black;
}

.name1{
  margin-right:-30px;
  border: 2px solid black;
}

.name1:focus{
  border-radius: 25px;
}
</style>

<style>
  .mail{
    border-radius: 10px;
    outline: none;
    border-color:black;
    width: 550px;
  }

  .mail:focus{
    border: 2px solid orange;
  }

.mail::placeholder{
  color:black;
  font-family: 'Rajdhani';
}

.ps{
  border-radius: 10px;
  outline: none;
  border-color: black;
}

.ps:focus{
  border: 2px solid orange;
}

.ps::placeholder{
  color: black;
}

.enter{
  border-radius: 10px;
  outline: none;
  border-color: black;
}

.enter:focus{
  border: 2px solid orange;
}

.enter::placeholder{
  color: black;
}

.birth{
  border-radius: 10px;
  outline: none;
  border: 2px solid black;
  font-family: 'Rajdhani';
  height: 40px;
  width: 170px;
  margin-left: -10px;
}

.birth:focus{
  border: 2px solid orange;
}

.days{
  border-radius: 10px;
  outline: none;
  border: 2px solid black;
  font-family: 'Rajdhani';
  height: 40px;
  width: 170px;
  margin-left:4px;
}

.days:focus{
  border: 2px solid orange;
}

.years{
  border-radius: 10px;
  outline: none;
  border: 2px solid black;
  font-family: 'Rajdhani';
  height: 40px;
  width: 170px;
  float:right;
  margin-right:-10px
}

.years:focus{
  border: 2px solid orange;
}


</style>

<div class="popup">
	<div class="popup-content">
     <img style="width:40px; margin-left:470px; margin-top:-10px; cursor:pointer"src="img/close.png" class="cloz">
     <h1 style="font-size:50px; margin-top:-43px; color:black">Sign Up</h1>
     <b><h2 style="font-size:35px; margin-top:-30px; color:black">It's fast, used to explore <span style="color:orange">feed</span>.</h2></b>
     <hr style="border:2px solid black; margin-top:-20px; width:536px; margin-left:-20px">

<div>

     <form method="post" action="javascript:void(0)" id="mainForm">
     <input class="name1" id="first" style="width:250px; font-family:'Rajdhani'; border-radius:10px; outline:none; border-color:black; margin-left:-10px; margin-top:4px; border-color: black"type="text" name="firstname" placeholder="First Name">
     <i style="color: green; margin-left:-30px; visibility: hidden" class="fa fa-check-circle" id="check"></i>
     <i style="color: red; visibility: hidden; margin-left: -11px" class="fa fa-exclamation-circle" id="wrong"></i>
     <small style="font-size: 14px; margin-left: -226px; margin-top:50px; position:absolute; visibility: hidden; color:red" id="name"></small>
     <input class="name2" id="second" style="width:250px; font-family: 'Rajdhani'; border-radius:10px; outline:none; border-color:black; margin-right:-270px; margin: 4px; float:right; border: 2px solid black"type="text" name="secondname" placeholder="Last Name">
   <div style="margin-left: 500px">
     <i style="color: green; margin-left: -30px; margin-top:-36px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="correct"></i>
     <i style="color: red; margin-left:-30px; margin-top:-36px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="incorrect"></i>
     <small style="margin-left: -250px; visibility: hidden; margin-top:-7px; color:red; font-size: 14px; position: fixed" id="last"></small>
   </div>

     <input style="margin-left:-10px; width:505px; font-family:inherit; margin-top:11px" class="mail" type="text" id="email" name = "email" placeholder="Email Address">
     <i style="color: green; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="yes"></i>
     <i style="color: red; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="no"></i>
     <small style="margin-top:56px; position: fixed; margin-left: -498px; font-size: 14px; color:red; visibility: hidden" id="mailText"></small>
     <span style="margin-top:56px; position: fixed; margin-left: -498px; font-size: 14px; color: red; display:none" id="emailExists" name="emailExists" class="emailExists"></span>
     <small style="margin-top:56px; position: fixed; margin-left: -498px; font-size: 14px; color:red; visibility:hidden" id="validEmail">Please enter a valid email address.</small>
     <input style="margin-left:-10px; width:505px; font-family:inherit; margin-top: 10px" class="ps" type="password" id="password" name="pass" placeholder="Password">
     <i style="color: green; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="yep"></i>
     <i style="color: red; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="nope"></i>
     <small style="margin-top: 55px; position: fixed; margin-left: -498px; font-size: 14px; color:red; visibility:hidden" id="passText"></small>
     <input style="margin-left:-10px; width:505px; font-family:inherit; margin-top: 10px" class="enter" type="password" id="en" name="epassword" placeholder="Re-enter Password">
     <i style="color: green; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-check-circle" id="yeah"></i>
     <i style="color: red; margin-top:28px; margin-left:-38px; position:absolute; visibility: hidden" class="fa fa-exclamation-circle" id="not"></i>
     <small style="margin-top: 55px; position: fixed; margin-left: -498px; font-size: 14px; color:red; visibility:hidden" id="enText"></small>

    <center><h2 style="color:black; margin-top:7px">Date of Birth</h2></center>
      <select class="birth" name="birth">
        <option value="month">Month</option>
        <option value="jan">January</option>
        <option value="feb">February</option>
        <option value="march">March</option>
        <option value="april">April</option>
        <option value="may">May</option>
        <option value="jun">June</option>
        <option value="july">July</option>
        <option value="aug">August</option>
        <option value="sep">September</option>
        <option value="oct">October</option>
        <option value="nov">November</option>
        <option value="dec">December</option>
      </select>

      <select class="days" name="days">
        <option value="day">Day</option>
        <option value="day">1</option>
        <option value="day">2</option>
        <option value="day">3</option>
        <option value="day">4</option>
        <option value="day">5</option>
        <option value="day">6</option>
        <option value="day">7</option>
        <option value="day">8</option>
        <option value="day">9</option>
        <option value="day">10</option>
        <option value="day">11</option>
        <option value="day">12</option>
        <option value="day">13</option>
        <option value="day">14</option>
        <option value="day">15</option>
        <option value="day">16</option>
        <option value="day">17</option>
        <option value="day">18</option>
        <option value="day">19</option>
        <option value="day">20</option>
        <option value="day">21</option>
        <option value="day">22</option>
        <option value="day">23</option>
        <option value="day">24</option>
        <option value="day">25</option>
        <option value="day">26</option>
        <option value="day">27</option>
        <option value="day">28</option>
        <option value="day">29</option>
        <option value="day">30</option>
        <option value="day">31</option>
      </select>

      <select style="left:20px"class="years" name="years">
        <option value="yr">Year</option>
        <option value="yr">2021</option>
        <option value="yr">2020</option>
        <option value="yr">2019</option>
        <option value="yr">2018</option>
        <option value="yr">2017</option>
        <option value="yr">2016</option>
        <option value="yr">2015</option>
        <option value="yr">2014</option>
        <option value="yr">2013</option>
        <option value="yr">2012</option>
        <option value="yr">2011</option>
        <option value="yr">2010</option>
        <option value="yr">2009</option>
        <option value="yr">2008</option>
        <option value="yr">2007</option>
        <option value="yr">2006</option>
        <option value="yr">2005</option>
        <option value="yr">2004</option>
        <option value="yr">2003</option>
        <option value="yr">2002</option>
        <option value="yr">2001</option>
        <option value="yr">2000</option>
        <option value="yr">1999</option>
        <option value="yr">1998</option>
        <option value="yr">1997</option>
        <option value="yr">1996</option>
        <option value="yr">1995</option>
        <option value="yr">1994</option>
        <option value="yr">1993</option>
        <option value="yr">1992</option>
        <option value="yr">1991</option>
        <option value="yr">1990</option>
        <option value="yr">1989</option>
        <option value="yr">1988</option>
        <option value="yr">1987</option>
        <option value="yr">1986</option>
        <option value="yr">1985</option>
        <option value="yr">1984</option>
        <option value="yr">1983</option>
        <option value="yr">1982</option>
        <option value="yr">1981</option>
        <option value="yr">1980</option>
        <option value="yr">1979</option>
        <option value="yr">1978</option>
        <option value="yr">1977</option>
        <option value="yr">1976</option>
        <option value="yr">1975</option>
        <option value="yr">1974</option>
        <option value="yr">1973</option>
        <option value="yr">1972</option>
        <option value="yr">1971</option>
        <option value="yr">1970</option>
        <option value="yr">1969</option>
        <option value="yr">1968</option>
        <option value="yr">1967</option>
        <option value="yr">1966</option>
        <option value="yr">1965</option>
        <option value="yr">1964</option>
        <option value="yr">1963</option>
        <option value="yr">1962</option>
        <option value="yr">1961</option>
        <option value="yr">1960</option>
        <option value="yr">1959</option>
        <option value="yr">1958</option>
        <option value="yr">1957</option>
        <option value="yr">1956</option>
        <option value="yr">1955</option>
        <option value="yr">1954</option>
        <option value="yr">1953</option>
        <option value="yr">1952</option>
        <option value="yr">1951</option>
        <option value="yr">1950</option>
        </select>
        </select>
      </select>

<style>
/* The container */
.gender {
  display: block;
  position: relative;
  padding-left: 85px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.gender input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 1px;
  left: 10px;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.gender:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.gender input:checked ~ .checkmark {
  background-color: orange;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.gender:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.gender input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.gender .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}

.but {
  width: 100%;
  height: 40px;
  background-color: orange;
  margin-left: -2px;
  cursor: pointer;
}

.but:hover {
  box-shadow: 2px 2px 5px black;
}
</style>
<body>

<center><h2 style="color:black">Gender</h2></center>

<label class="gender" style="border: 2px solid black; width:15%; border-radius: 25px; color:black; padding-left:50px; margin-left:-10px">Female
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<label class="gender" style="border: 2px solid black; width:10%; border-radius: 25px; color:black; padding-left:50px; margin-left:124px; margin-top:-44px">Male
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>
<center><label class="gender" style="border: 2px solid black; width:13%; border-radius: 25px; color:black; padding-left:50px; float: center; margin-left:95px; margin-top:-44px">Other
  <input type="radio" name="radio">
  <span class="checkmark"></span></center>
</label>
<label class="gender" style="border: 2px solid black; width:15%; border-radius: 25px; color:black; padding-left:50px; float:right; margin-top:-44px">Not say
  <input type="radio" name="radio">
  <span class="checkmark"></span>
</label>

<h3 style="color:black; margin-left:-10px">By clicking Create an Account, you agree to our <a href="" style="color:blue">Terms</a> , <a href="" style="color:blue">Privacy Policy</a> and <a href="" style="color:blue">Cookies</a>. This statement has an essential requirement, and you can withdraw at any time.</h3>

<input type="button" type="submit" value="Create An Account" name="sub" class="but" id="press" style="margin-top:-1px; font-family:'Rajdhani'; border: none; border-radius:25px; outline: none" onclick="checkEmail()">
</form>


    </div>
</div>

<script type="text/javascript">

// Input 1 (First Name)

var btnSubmit = document.getElementById('press');
var first = document.getElementById('first');
var check = document.getElementById('check');
var wrong = document.getElementById('wrong');
var small = document.getElementById('name');

var second = document.getElementById('second');
var correct = document.getElementById('correct');
var incorrect = document.getElementById('incorrect');
var last = document.getElementById('last');

var yes = document.getElementById('yes');
var no = document.getElementById('no');
var email = document.getElementById('email');
var mailText = document.getElementById('mailText');
var validEmail = document.getElementById('validEmail'); // invalid email error message
var emailExists = document.getElementById('emailExists'); // if email exists error message

var yep = document.getElementById('yep');
var nope = document.getElementById('nope');
var password = document.getElementById('password');
var passText = document.getElementById('passText');

var yeah = document.getElementById('yeah');
var not = document.getElementById('not');
var en = document.getElementById('en');
var enText = document.getElementById('enText');

var first = document.getElementById('first');
var second = document.getElementById('second');
var email = document.getElementById('email');
var password = document.getElementById('password');
var en = document.getElementById('en');

btnSubmit.addEventListener('click', () => {
  if(first.value === "") {
      wrong.style.visibility = 'visible';
      check.style.visibility = 'hidden';
      first.style.border = '2px solid red';
      small.style.visibility = 'visible';
      small.innerText = "What's your first name?";
  } else {
      check.style.visibility = 'visible';
      wrong.style.visibility = 'hidden';
      first.style.border = '2px solid green';
      small.style.visibility = 'hidden';
  }

    if(second.value === "") {
      incorrect.style.visibility = 'visible';
      correct.style.visibility = 'hidden';
      second.style.border = '2px solid red';
      last.style.visibility = 'visible';
      last.innerText = "What's your last name?"
    } else {
      incorrect.style.visibility = 'hidden';
      correct.style.visibility = 'visible';
      second.style.border = '2px solid green';
      last.style.visibility = 'hidden';
    }

    // function validateEmail(email) {
    //   const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //   return re.test(email);
    // }

  if(email.value === "") {
    no.style.visibility = 'visible';
    yes.style.visibility = 'hidden';
    email.style.border = '2px solid red';
    mailText.style.visibility = 'visible';
    mailText.innerText = "Please enter an email address.";
    validEmail.style.visibility = 'hidden';
  } else if (!validateEmail(email.value)) {
    no.style.visibility = 'visible';
    yes.style.visibility = 'hidden';
    email.style.border = '2px solid red';
    mailText.style.visibility = 'hidden';
    validEmail.style.visibility = 'visible';
    emailExists.style.visibility = 'hidden';
  } else {
    yes.style.visibility = 'visible';
    no.style.visibility = 'hidden';
    email.style.border = '2px solid green';
    mailText.style.visibility = 'hidden';
    validEmail.style.visibility = 'hidden';
    emailExists.style.visibility = 'visible';
  }

  if(password.value === "") {
    yep.style.visibility = 'hidden';
    nope.style.visibility = 'visible';
    password.style.border = '2px solid red';
    passText.style.visibility = 'visible';
    passText.innerText = "Please enter a reliable, memorable password combination.";
  } else if (password.value.length < 6) {
    yep.style.visibility = 'hidden';
    nope.style.visibility = 'visible';
    password.style.border = '2px solid red';
    passText.style.visibility = 'visible';
    passText.innerText = "Your password combination must be at least 6 characters.";
  } else {
    yep.style.visibility = 'visible';
    nope.style.visibility = 'hidden';
    password.style.border = '2px solid green';
    passText.style.visibility = 'hidden';
  }

//////////////////////////////////////////////////

//
// if (validateEmail(email)) {
//     no.style.visibility = 'hidden';
//     yes.style.visibility = 'visible';
//     email.style.border = '2px solid green';
//     mailText.style.visibility = 'hidden';
//     validEmail.style.visibility = 'hidden';
//   } else {
    // no.style.visibility = 'visible';
    // yes.style.visibility = 'hidden';
    // email.style.border = '2px solid red';
    // mailText.style.visibility = 'hidden';
    // validEmail.style.visibility = 'visible';
//   }

//////////////////////////////////////////////////

   if(en.value === "") {
     not.style.visibility = 'visible';
     yeah.style.visibility = 'hidden';
     en.style.border = '2px solid red';
     enText.style.visibility = 'visible';
     enText.innerText = "Please re-enter your password.";
   } else if (en.value != password.value) {
     not.style.visibility = 'visible';
     yeah.style.visibility = 'hidden';
     en.style.border = '2px solid red';
     enText.style.visibility = 'visible';
     enText.innerText = "Your passwords don't match. Please try again.";
   } else {
     not.style.visibility = 'hidden';
     yeah.style.visibility = 'visible';
     en.style.border = '2px solid green';
     enText.style.visibility = 'hidden';
   }

    if(first.value.length > 0 && second.value.length > 0 && email.value.length > 0 && password.value.length > 0 && en.value.length > 0 && en.value == password.value && password.value.length >= 6) {
         // location.href = "home.php";
         document.getElementById('mainForm').submit();
    }
});

</script>



<script>

document.getElementById("sgnbtn").addEventListener("click", function(){
  document.querySelector(".popup").classList.add("active");
})

document.querySelector(".cloz").addEventListener("click", function(){
  document.querySelector(".popup").classList.remove("active");
})

</script>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</div>
</div>

<div class="text">
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@700&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Rajdhani';font-size: 10px; color:orange; margin-left:970px; margin-top:200px
}
</style>

<p></p>
</div>

<img style="top:20px; right:1025px;position:fixed; background: #E0E0E0"src="img/feed.png">
<img style="top:87px; position:fixed; right:775px"src="img/new.png">

<hr style="margin-top:580px; width:400px; margin-left:-830px; border:2px solid black; position:fixed">
<div>
<h1 style="margin-left:-780px; margin-top:589px; position: fixed">Privacy</h1>
<h1 style="margin-left:-675px; margin-top:589px; position: fixed">Feed © 2021</h1>
<h1 style="margin-left:-530px; margin-top:589px; position: fixed">Terms</h1>
</div>

<style>

.loginimg {
  position:fixed;
  height: 828px;
  width: 750px;
  margin-left: -277px;
  margin-top: -204px;
}

</style>

<img class="loginimg" src="img/loginimg.png">

  </body>
</html>
</body>
<script src="script.js"></script>
</html>
