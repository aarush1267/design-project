<?php
session_start();
if (isset($_POST['firstname'])) {
  $_SESSION['firstname'] = $_POST['firstname'];
  $_SESSION['lastname'] = $_POST['secondname'];
}

if (!isset($_SESSION['sub'])) {
    header("location:login.php"); // Not logged in redirect to login
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Feed</title>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <body style="background-color:#E0E0E0; position:relative">

    <style>
    .hide {
      display: none;
    }

    .myDIV:hover + .hide {
      font-family: sans-serif;
      background-color: lightgrey;
      width:40px;
      padding: 20px;
      margin: 0px;
    }
    </style>

    <style>

    .home:hover {
      background-size: 20px;
      height:10px;
      width:10px;
      border-radius: 100px;
      margin-top:20px;
    }

    .home:hover .hometext {
      visibility: visible;
      opacity: 1;
    }

    </style>

<div class="search-box">
  <input class="search-txt" type="text" name="" style="color: black; font-family: 'Rajdhani'" placeholder="Search Feed">
  <a class="search-btn" href="#">
  <i class="fas fa-search"></i>
  </a>
</div>

<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');


.search-txt::placeholder{
  color: black;
}

.search-box{
  margin-top: 35px;
  position: fixed;
  transform: translate(-50%,-50%);
  margin-left: 158px;
  background: #e69138;
  height: 40px;
  border-radius: 40px;
  padding: 10px;
}

.search-box:hover{
  box-shadow: 0 10px 100px rgba(0,0,0,.40);
}

.search-btn{
  color: black;
  float: right;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: #e69138;
  display: flex;
  justify-content: center;
  align-items: center;
}

.search-txt{
  border: none;
  background: none;
  outline: none;
  float: left;
  padding: 0;
  color: white;
  font-size: 16px;
  transition: 400ms;
  line-height: 40px;
  width: 0px;
}

.search-box:focus-within > .search-txt{
  width: 240px;
  padding: 0 6px;
}

.search-box:focus-within > .search-btn{
    background: #d1d8d0;
}

.search-box:focus-within > .search-btn:hover {
  border: 2px solid black;
}

</style>

    <table border="0" width="100%" bgcolor="#E0E0E0" height="8%">
    <tr>
    <th width="20%">
              <font color="white" size="4">
                <div style="display: flex; align-self: center; margin-left: 100%; margin-bottom:107px; margin-top:-131px; padding-bottom:90px">
                  <a style="text-decoration:none"href="home.php">
                  <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                  <img class="home" style="height: 150px; width: 160px; margin-left: -90px; margin-top:-34px"src="img/orangehome.png"/></div></a>
                  <div class="myDIV">
                    <div class="hide">Home</div>
                  <div style="margin-top: 5px; margin-left: 10px">
                  </div>
                </div></font>
              </th>
              <th width="20%">
                        <font color="white" size="4">
                          <div style="display: flex; align-self: center; margin-left: 36%; margin-top:-198px; padding-bottom:90px">
                            <a style="text-decoration:none"href="friends.php">
                            <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                            <img
                              style="height: 72px; width: 112px; margin-left:-130px; margin-top:-33px"
                              src="img/friends.png"/>
                            </a>
                            <div style="margin-top: 5px; margin-left: 10px">
                            </div>
                          </div></font>
                        </th>

    <th width="20%">
             <font color="white" size="4">
                <div style="display: flex; align-self: center;margin-left:-145px; margin-top:-208px; padding-bottom:90px">
                  <a style="text-decoration:none"href="saved.php">
                  <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                  <img
                    style="height: 80px; width: 80px; margin-left:-227px; margin-top:-25px"
                    src="img/saved.png"/>
                    </a>
                  <div style="margin-top: 5px; margin-left: 10px">
                  </div>
                </div></font>
              </th>
      <img onclick="location.href='catalogues.php'"src="img/cataloguewhite.png" style="width:90px; margin-left:762px; margin-bottom:12px; margin-top:-10px; cursor: pointer">
      <img onclick="location.href='chat.php'"src="img/whtchat.png" style="width:80px; margin-left:47px; margin-bottom:17px; margin-top:-35px; cursor: pointer">
    </tr>
  </table>


<style>

  hr.two {
    height: 5px;
    border: 2px solid black;
    background: linear-gradient(to left, orange, blue, green, yellow, purple, red);
    margin-top:-5px;
    margin-left:-8px;
    width:1436px;
    overflow: hidden;
  }
</style>

<hr class="two" style="margin-top:-235px">

<style>

@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');

.container{
  font-family: 'Rajdhani';
  font-size: 30px;
  color: orange;
  text-decoration: none;
}

</style>

<div class="container">

<style>

.filter {
  width: 39px;
  position: fixed;
  margin-left: 60px;
  margin-top: 1px;
  border-radius: 5px;
  cursor: pointer;
}

</style>

<div class="upper">
<b><button onclick="location.href='home.php'" style="margin-left:480px; font-size:25px; background-color: #FF8C00 ;color: black; font-family: 'Rajdhani'; z-index:-1; border: 2px solid black; border-radius: 10px; cursor: pointer">Home</button></b>
<b><button onclick="location.href='favourites.php'" style="margin-left: 10px; color: black; background-color:#E0E0E0 ; text-decoration: none; font-family:'Rajdhani'; font-size: 25px; border: 2px solid black; border-radius: 10px; cursor: pointer">Favourites</button></b>
<b><button onclick="location.href='yourposts.php'" style="margin-left:10px; color: black; text-decoration: none; background-color: #E0E0E0; font-family: 'Rajdhani'; font-size: 25px; border: 2px solid black; border-radius: 10px; cursor: pointer">Your Posts</button></b>
<img src="img/filter.png" alt="filter/setting" class="filter" id="filter">
</div>

<hr style="width: 502px; margin-left:450px; position: fixed; height: 1px; background-color: black; border: none">

</div>

<p class="hometext" style="margin-top:-78px; margin-left:432px; background: orange; border-radius:5px;width:60px; z-index:1; font-size:25px; position:fixed; font-family:'Rajdhani'; visibility:hidden; transition: 300ms ease-in-out; opacity: 0">Home</p>
<p class="friendstext" style="margin-top:-78px; margin-left:545px; font-size:25px; font-family:'Rajdhani'; background: orange; width:77px; z-index:1; border-radius:5px; position:fixed; visibility:hidden">Friends</p>
<p class="savedtext" style="margin-top:-78px; margin-left:669px; font-size: 25px; font-family:'Rajdhani'; background:orange; width:64px; border-radius:5px; position:fixed; z-index:1; visibility:hidden">Saved</p>
<p class="cataloguetext" style="margin-top:-78px; margin-left:753px; font-size: 25px; font-family:'Rajdhani'; background:orange; width:116px; border-radius:5px; position:fixed; z-index:1; visibility:hidden">Catalogues</p>
<p class="chattext" style="margin-top:-78px; margin-left:896px; font-size:25px; font-family:'Rajdhani'; background:orange; width:50px; border-radius:5px; position:fixed; z-index:1; visibility:hidden">Chat</p>


<img onclick="location.href='profile.php'" style="width: 90px; margin-left:1330px; margin-top: -134px; position: fixed; cursor: pointer" src="img/pfp.png" alt="defaultPFP">


</head>

  </body>
</html>
