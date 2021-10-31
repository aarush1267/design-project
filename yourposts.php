<?php
session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];

if (!isset($_SESSION['sub'])) {
    header("location:login.php"); // Not logged in redirect to login
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Your Posts | Feed</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body style="background-color:#E0E0E0">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');

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

    .bord
    {
    	  border: 2px solid black;
        border-radius: 25px;
        width:40%;
        height: 670px;
        margin-top: -19px;
        margin-left: 18px;
        background-color: lightgrey;
        position: fixed;
    }
    </style>

    <div class="search-box">
      <input class="search-txt" type="text" name="" style="color: black; font-family: 'Rajdhani'" placeholder="Search Feed">
      <a class="search-btn" href="#">
      <i class="fa fa-search"></i>
      </a>
    </div>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');


    .search-txt::placeholder{
      color: black;
    }

    .search-box{
      margin-top: 42px;
      position: fixed;
      transform: translate(-50%,-50%);
      margin-left: 168px;
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
        content: url("https://cdn3.iconfinder.com/data/icons/mini-icon-set-web-design-device/91/Web_-_Design_-_Device_99-512.png");
    }

    .search-box:focus-within > .search-btn:hover {
      border: 2px solid black;
    }

    </style>


    <table border="0" width="100%" bgcolor="#E0E0E0" height="8%">
    <tr>
    <th width="20%">
              <font color="white" size="4">
                <div style="display: flex; align-self: center; margin-left: 100%; margin-bottom:107px; margin-top:-51px; padding-bottom:90px">
                  <a style="text-decoration:none"href="home.php">
                  <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                  <img style="height: 150px; width: 160px; margin-left: -90px; margin-top:-34px"src="img/orangehome.png"/></div></a>
                  <div class="myDIV">
                    <div class="hide">Home</div>
                  <div style="margin-top: 5px; margin-left: 10px">
                  </div>
                </div></font>
              </th>
              <th width="20%">
                        <font color="white" size="4">
                          <div style="display: flex; align-self: center; margin-left: 36%; margin-top:-158px; padding-bottom:90px">
                            <a style="text-decoration:none"href="friends.php">
                            <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                            <img
                              style="height: 72px; width: 112px; margin-left:-140px; margin-top:-33px"
                              src="img/friends.png"/>
                            </a>
                            <div style="margin-top: 5px; margin-left: 10px">
                            </div>
                          </div></font>
                        </th>
    <th width="20%">
             <font color="white" size="4">
                <div style="display: flex; align-self: center;margin-left:-145px; margin-top:-166px; padding-bottom:90px">
                  <a style="text-decoration:none"href="saved.php">
                  <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                  <img
                    style="height: 80px; width: 80px; margin-left:-246px; margin-top:-25px"
                    src="img/saved.png"/>
                    </a>
                  <div style="margin-top: 5px; margin-left: 10px">
                  </div>
                </div></font>
              </th>
              <img onclick="location.href='catalogues.php'"src="img/cataloguewhite.png" style="width:90px; margin-left:757px; margin-bottom:-66px; margin-top:-5px; cursor: pointer">
              <img onclick="location.href='chat.php'"src="img/whtchat.png" style="width:80px; margin-left:40px; margin-bottom:-60px; margin-top:-5px; cursor: pointer">
      </tr>
    </table>


<style>

  hr.two {
    height: 5px;
    border: 2px solid black;
    background: linear-gradient(to left, orange, blue, green, yellow, purple, red);
    margin-top:25px;
    margin-left:0px;
    width:1436px;
    overflow: hidden;
  }
</style>

<style>

@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');

.yes{
  font-family: 'Rajdhani';
  font-size: 30px;
  color: orange;
  text-decoration: none;
}

.storybtn{
  font-family: 'Rajdhani';
}

</style>

<hr class="two" style="margin-top:-235px">

<div class="yes">

<style>

  .filter {
    width: 39px;
    position: fixed;
    margin-left: 58px;
    margin-top: 1px;
    border-radius: 5px;
    cursor: pointer;
  }

</style>

<div class="upper">
  <b><button onclick="location.href='home.php'" style="margin-left:665px; font-size:25px; background-color: #E0E0E0 ;color: black; font-family: 'Rajdhani'; z-index:-1; border: 2px solid black; border-radius: 10px; cursor: pointer">Home</button></b>
  <b><button onclick="location.href='favourites.php'" style="margin-left: 10px; color: black; background-color:#E0E0E0 ; text-decoration: none; font-family:'Rajdhani'; font-size: 25px; border: 2px solid black; border-radius: 10px; cursor: pointer">Favourites</button></b>
  <b><button onclick="location.href='yourposts.php'" style="margin-left:10px; color: black; text-decoration: none; background-color: #FF8C00; font-family: 'Rajdhani'; font-size: 25px; border: 2px solid black; border-radius: 10px; cursor: pointer">Your Posts</button></b>
  <img src="img/filter.png" alt="filter/setting" class="filter" id="filter">
</div>

<hr style="width: 502px; margin-left:635px; position: fixed; height: 1px; background-color: black; border: none">

</div>

<div class="bord">

<style>

button[type=statusbtn]
{
  margin-left:30px;
  width: 90%;
  height:80px;
  border-radius:25px;
  border-color:black;
  border: 2px solid black;
  outline: none;
  margin-top:-20px;
  font-family: Verdana;
  font-size: 20px;
}

button[type=storybtn]
{
  margin-left:30px;
  width: 90%;
  height:80px;
  border-radius:25px;
  border-color:black;
  border: 2px solid black;
  outline: none;
  margin-top:20px;
  font-family: Verdana;
  font-size:20px;
}

</style>

<div>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</div>
<div class="text">
<div><button type="storybtn" name="button"><i class="fa fa-plus" style="font-size:24px; margin-left:-287px; margin-bottom:-20px; position:fixed"><b style="margin-left:-222px"><p style="padding-bottom: 20px; font-family: 'Rajdhani'"></p></i>Your Story</button>
</div>
</div>

<div>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</div>
<div class="text">
<div><button type="statusbtn" name="button"><div><i class="fa fa-plus" style="font-size:24px; margin-left:-237px; margin-bottom:-20px; position:fixed"><b style="margin-left:-180px"></div><p style="padding-bottom: 20px; font-family: 'Rajdhani'; position:fixed"></p></i>Current Status</button>
</div>
</div>

<style>

.post {
  width: 84%;
  padding: 14px 28px;
  cursor: auto;
  margin: 18px 0;
  font-size:17px;
  font-family: sans-serif;
  cursor: auto;
  height:auto;
  height:400px;
  border: 2px solid black;
  border-radius: 25px;
  margin-left: 15px;
  outline-style: none;
  margin-top:-1px;
}

</style>

<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');
input[type=feed]
{
  margin-left: 100px;
  width: 76%;
  height: 40px;
  font-family: Verdana;
  border-radius: 20px;
  border-color: black;
  outline: none;
  font-family: 'Rajdhani';
}

input[type=feed]:hover
{
  background-color: #E8E8E8;
  cursor: pointer;
}

input[type=feed]::placeholder
{
  color: black;
  padding-left: 5px;
}

.prof{
  width: 60px;
  margin-left: 29px;
  position: fixed;
  margin-top: 2px;
  cursor: pointer;
}
</style>
<div class="post" style="font-family:Verdana"><center style="margin-top:-4px"><b>Post a Feed</center></b></div>
<hr style="width:540px; margin-top:-407px; margin-left:17px; border: 1px solid black">

<img onclick="location.href='profile.php'" src="img/pfp.png" class="prof">
<input type="feed" autocomplete="off" name="feed" id="feed" placeholder="What's going on, <?php echo $firstname ?>?">

<hr style="width:540px; margin-top:13px; margin-left:17px; border: 1px solid black">

<style>

body
{

	margin: 0;
    padding: 0;
    font-family: Verdana;
}

.container
{

	position: relative;
    width: 500px;
    height: 300px;
    margin: 240px auto;
}

.container .box
{
	position: relative;
	width: calc(200px - 30px);
    height: calc(200px - 30px);
    background: black;
    float: left;
    margin: 15px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius:14px;
}

.container .box .icon
{

	position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: #f00;
    transition: 0.5s;
    z-index: 1;
}

.container .box:hover .icon
{
	top: 20px;
    left: calc(50% - 40px);
    width: 80px;
    height: 80px;
    border-radius: 50%;
}

.container .box .icon .icn
{
	position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-40px, -140px);
    font-size: 80px;
    transition: 0.5s;
    color: #fff;
}

.container .box .content
{
    position:absolute;
    height: 100%;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    color: orange;
    font-family: Verdana;
    transition: 0.5s;
}

.container .box:nth-child(1) .content
{
  color:red;
}

.container .box:nth-child(2) .content
{
  color:lightblue;
}

.container .box:nth-child(3) .content
{
  color:orange;
}

.container .box:nth-child(1) .icon
{
  background: red;
}

.container .box:nth-child(2) .icon
{
  background: lightblue;
}

.container .box:nth-child(3) .icon
{
  background: orange;
}
</style>

<img style="width:80px; margin-top:-15px; margin-left:70px;cursor: pointer" src="img/memory.png">

<hr style="width:0px; height:64px; border: 1px solid black; margin-left:205px; margin-top:-77px">

<img style="width:70px; margin-left:256px; margin-top:-90px; margin-bottom:15px; cursor: pointer" src="https://vectorified.com/images/shout-out-icon-34.png">

<hr style="width:0px; height:64px; border: 1px solid black; margin-left:385px; margin-top:-93px">

<img style="width:60px; margin-left:448px; margin-top:-79px; margin-bottom:26px; cursor: pointer"src="https://icon-library.com/images/petition-icon/petition-icon-15.jpg">

<hr style="width:540px; margin-left:16px; border: 1px solid black; margin-top:-27px">

<button type="categorize" name="categorize" style="margin-left:30px; background-color:yellow; width:510px; height:45px; border-radius:25px; font-family:Verdana; margin-top:2px; border-color:black; outline:none; cursor: pointer"><b>Categorize</button></b>

<hr style="width:540px; margin-left:16px; border: 1px solid black; margin-top:9px">

<div class="container">
			<div class="box" style="margin-left:-15px; margin-top:-234px; cursor: pointer">
            		<div class="icon"><center><img style="width:80px; margin-top:100px" src="img/exclamation.png" class="icn"></div></center>
      <div class="content" style="margin-top:80px; margin-left:1px">
        <h3>Significance</h3>
      </div>
      </div>
      <div class="box" style="margin-left:165px; margin-top:-234px; cursor: pointer">
        <div class="icon"><center><img style="width:80px; margin-top:100px" src="img/star.png" class="icn"></div></center>
<div class="content" style="margin-top:80px; margin-left:7px">
<h3>Experience</h3>
</div>
      </div>
      <div class="box" style="margin-left:345px; margin-top:-234px; cursor: pointer">
        <div class="icon"><center><img style="width:80px; margin-top:100px" src="img/people.png" class="icn"></div></center>
<div class="content" style="margin-top:80px; margin-left:1px">
<h3>Recruitment</h3>
</div>
      </div>
</div>
</div>
</div>

<img onclick="location.href='profile.php'" style="width: 90px; margin-left:1740px; margin-top: -134px; position: fixed; cursor: pointer" src="img/pfp.png" alt="defaultPFP">

<!-- Post Popup -->

<style>
@import url('https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap');
.popup{
	  background: rgba(0, 0, 0, 0.6);
    width: 100%;
    height: 100%;
    position: fixed;
    left:0px;
    top: 0px;
    display: none;
    justify-content: center;
    align-items: center;
}
.popup.active {
  top: 0;
}
.popup-content{
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) scale(0.8);
	  height: 610px;
    width: 800px;
    background: #fff;
    opacity: 1;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 10px 100px rgba(0,0,0,.80);
    transition: all 200ms ease-in-out;
}
  .popup.active .popup-content {
  transform:translate(-50%,-50%) scale(1);
    opacity:1;
  }

.popupPFP{
  width: 80px;
  margin-top: 5px;
  margin-left: -3px;
  cursor: pointer;
}

.start{
  font-family: 'Rajdhani';
  margin-top: -4px;
  margin-left: -8px;
}

.iconClose{
  width: 50px;
  position: fixed;
  margin-top: -68px;
  margin-left: 750px;
  cursor: pointer;
}

.popupName{
  font-family: 'Rajdhani';
  margin-top: -57px;
  margin-left: 76px;
}

.postContent{
  width: 104.5%;
  margin-left: -2.5%;
  margin-top: 5%;
  resize: none;
  font-family: 'Rajdhani';
  font-size: 23px;
  border: none;
  outline: none;
}

.postContent::placeholder{
  color: black;
  padding-left: 16px;
}

.bro{
  width: 50%;
}

.btnFeed{
  border-radius: 10px;
  font-family: 'Rajdhani';
  background-color: turquoise;
  height: 40px;
  width: 50%;
  outline: none;
  border: none;
  margin-top: -15px;
  position: fixed;
  font-size: 20px;
  cursor: pointer;
}


.btnFeedback{
  border-radius: 10px;
  font-family: 'Rajdhani';
  background-color: lightblue;
  height: 40px;
  width: 44%;
  outline: none;
  border: none;
  margin-top: -15px;
  position: fixed;
  font-size: 20px;
  margin-left: 51%;
  padding-right: 30px;
}

.pos{
  width: 100%;
  margin-top: 45px;
  height: 10%;
  border-radius: 10px;
  font-family: 'Rajdhani';
  font-size: 30px;
  background-color: orange;
  border: none;
  outline: none;
  cursor: pointer;
}

.pos:active{
  width: 90%;
  height: 7%;
}
</style>

<div class="popup" id="popup">
  <div class="popup-content">

    <center><h1 class="start">Post a Feed</h1></center>
    <hr style="margin-top: -10px; width: 105%; margin-left: -20px; height: 1px; background-color: black; border: none">
    <img src="img/close.png" class="iconClose" id="iconClose">
    <img onclick="location.href='profile.php'" class="popupPFP" src="img/pfp.png" alt="popupPFP">
    <h3 class="popupName"><?php echo $firstname . "&nbsp;" . $lastname . " is adding a post."?></h3>

    <hr style="margin-top: 20px; position:fixed; width: 100%; margin-left: -20px; height: 1px; background-color: black; border: none">
    <textarea id="postContent" name="postContent" rows="8" cols="80" class="postContent" placeholder="What's going on, <?php echo $firstname ?>?"></textarea>


    <div style="background: #A8A8A8; border-radius: 15px; width: 72%;">
    <h1 style="font-family:'Rajdhani'; padding-top: 8px; padding-left: 14px">Additionals</h1>
    <img style="width: 55px; margin-top: -64px; margin-left: 180px; position: fixed; cursor: pointer" alt="image" src="img/thenew.png">
    <h1 style="color: orange; font-family: 'Rajdhani'; margin-top: -74px; margin-left: 250px; font-size: 50px; cursor: pointer">@</h1>
    <img style="width: 51px; margin-top: -88px; margin-left: 303px; position: fixed; cursor: pointer" alt="feeling" src="img/feeling.png">
    <img style="width:55px; margin-top: -92px; position:fixed; margin-left: 365px; cursor: pointer" alt="memory" src="img/memory.png">
    <img style="width: 55px; margin-top: -89px; position:fixed; margin-left: 432px; cursor: pointer" alt="shoutout" src="https://vectorified.com/images/shout-out-icon-34.png">
    <img style="width: 40px; margin-top: -84px; position: fixed; margin-left: 517px; cursor: pointer" alt="more" src="https://cdn4.iconfinder.com/data/icons/pictype-free-vector-icons/16/more-512.png">
  </div>

  <div class="bro">
  <img style="width: 55px; margin-top: -84px; margin-left: 620px; position: fixed; cursor: pointer" src="img/font.png" alt="font">
  <img style="width: 55px; margin-top: -90px; margin-left: 710px; position:fixed; cursor: pointer" src="https://icon-library.com/images/emoji-icon-png/emoji-icon-png-20.jpg" alt="emoji">
  </div>

  <button class="btnFeed" type="button" name="button"><i style="padding-right: 10px" class="fa fa-columns"></i>Categorize Feed</button>
  <button class="btnFeedback" type="button" name="button"><span style="margin-top:0px; position:fixed; margin-left: -65px">Feedback Settings</span><i id="yes_fdbk" onclick="yes_fdbk_click()" style="padding-left: 30px; background: #A8A8A8; border-radius: 5px; width: 18px; padding-right: 30px; margin-left: 115px; margin-top: 3px; cursor: pointer"
  class="fa fa-check"></i>
  <i onclick="no_fdbk_click()" class="fa fa-times" id="no_fdbk" style="margin-left: -30px; padding-left: 35px; padding-right: 30px;width: 80px; padding-top: 1px; cursor: pointer; margin-top: 3px; margin-bottom:-1px; position:fixed"></i></button>

  <button id="pos" class="pos">Post</button>

  </div>
</div>



<script type="text/javascript">

var iconClose = document.getElementById('iconClose');
var popup = document.getElementById('popup');

iconClose.addEventListener('click', () => {
  popup.style.display = 'none';
});

var feed = document.getElementById('feed');
var popup = document.getElementById('popup');

feed.addEventListener('click', () => {
  popup.style.display = 'flex';
});

///////

var no_fdbk = document.getElementById('no_fdbk');

function no_fdbk_click() {
  document.getElementById("no_fdbk").style.backgroundColor = "#A8A8A8";
  document.getElementById("no_fdbk").style.borderRadius = "5px";
  document.getElementById("no_fdbk").style.paddingLeft = "24px";
  document.getElementById("no_fdbk").style.paddingRight = "20px";
  document.getElementById("no_fdbk").style.marginLeft = "20px";
  document.getElementById("no_fdbk").style.height = "20px";
  document.getElementById("no_fdbk").style.width = "14px";
  document.getElementById("yes_fdbk").style.background = "none";
};

function yes_fdbk_click() {
  document.getElementById("yes_fdbk").style.background = "#A8A8A8";
  document.getElementById("no_fdbk").style.background = "none";
}

</script>

<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </body>
</html>
