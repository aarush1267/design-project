<?php
session_start();
$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <title><?php echo $firstname . "&nbsp;" . $lastname . "'s Profile" ?> | Feed</title>
  </head>
  <body>

    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Feed</title>

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
      <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
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
                    <div style="display: flex; align-self: center; margin-left: 100%; margin-bottom:107px; margin-top:-131px; padding-bottom:90px">
                      <a style="text-decoration:none"href="home.php">
                      <p style="color:black; font-family:Monospace; font-size: 25px"></p>
                      <img class="home" style="height: 150px; width: 160px; margin-left: -90px; margin-top:-34px"src="img/whitehome.png"/></div></a>
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
          <img onclick="location.href='catalogues.php'"src="img/cataloguewhite.png" style="width:90px; margin-left:757px; margin-bottom:10px; margin-top:-10px; cursor: pointer">
          <img onclick="location.href='chat.php'"src="img/whtchat.png" style="width:80px; margin-left:40px; margin-bottom:17px; margin-top:-35px; cursor: pointer">
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

.profileName{
  font-family: 'Rajdhani';
  margin-top: 14%;
  margin-left: 12%;
  display: block;
}

.profileNext{
  font-family: 'Rajdhani';
  position: fixed;
  margin-left: 170px;
  margin-top: -20px;
}

.profileDirect{
  font-family: 'Rajdhani';
  position: fixed;
  margin-left: 258px;
  margin-top: -20px;
}

.cover{
  position:fixed;
  margin-top: -36px;
  margin-left: -17px;
  width: 830px;
  height: 250px;
}

.pfp{
  position: fixed;
  width: 130px;
  margin-left:40px;
  margin-top: 150px;
  cursor: pointer;
}

.camera{
  position: fixed;
  width: 40px;
  border-radius: 60px;
  margin-top: 230px;
  margin-left: 86px;
  cursor: pointer;
}

.file{
  position: fixed;
  margin-top: 232px;
  margin-left: 85px;
  opacity: 0;
}

.bio{
  font-family: 'Rajdhani';
  color: blue;
  margin: 140px;
  margin-top: 50px;
  padding-left: 3px;
  position: fixed;
}

.bio:hover{
  background: orange;
  width: 62px;
  border-radius: 5px;
  cursor: pointer;
}

.editProfile{
  position: fixed;
  width: 110px;
  height: 40px;
  margin-top: -58px;
  margin-left: 503px;
  font-family: 'Rajdhani';
  border-radius: 5px;
  border: none;
  background-color: orange;
  cursor: pointer;
  outline: none;
}

.theBio{
  position: fixed;
  margin-left: 5px;
  margin-top: -102px;
  resize: none;
  outline: none;
  font-family: 'Rajdhani';
  background-color: lightgrey;
  width: 320px;
  height: 55px;
  border-radius: 5px;
  font-size: 15px;
}

.theBio::placeholder{
  color: black;
}

.theBio:focus{
  border: 1px solid darkorange;
}

.bioCancel , .bioSave{
  font-family: 'Rajdhani';
  cursor: pointer;
  background-color: orange;
  outline: none;
  border: none;
  border-radius: 5px;
  margin-left: 5px;
}

.bioCancel{
  margin-top: -37px;
  width: 4%;
  height: 3%;
  position: fixed;
  margin-left: 209px;
  visibility: hidden;
}

.bioSave{
  margin-top: -37px;
  width: 4%;
  height: 3%;
  position: fixed;
  margin-left: 272px;
}

.bioContent{
  visibility: hidden;
  position: fixed;
}

.finalBio{
  font-family: 'Rajdhani';
  margin-left: 5px;
  margin-top: -102px;
}

.bioEdit{
  font-family: 'Rajdhani';
  color: blue;
  margin-top: -38px;
  margin-left: 10%;
  cursor: pointer;
  visibility: hidden;
}

.bioEdit:hover{
  text-decoration: underline;
}

.imgPublic{
  width: 20px;
  height: 20px;
  margin-top: -35px;
  margin-left: 5px;
  position: fixed;
  visibility: hidden;
}

.remainingChars{
  font-family: 'Rajdhani';
  position: fixed;
  margin-top: -36px;
  font-size: 18px;
  margin-left: 33px;
  visibility: hidden;
}

.addToProfile{
  position: fixed;
  cursor: pointer;
  height: 40px;
  width: 50px;
  margin-top: -58px;
  margin-left: 636.5px;
  border-radius: 5px;
  outline: none;
  border: none;
  background-color: 	#318CE7;
  font-family: 'Rajdhani';
  padding-left: 5px;
}

.moreProfile , .searchProfile{
  width: 50px;
  height: 40px;
  margin-top: -100px;
  margin-left: 500px;
  border-radius: 5px;
  border: none;
  background-color: orange;
  cursor: pointer;
  outline: none;
  position: fixed;
}

.searchProfile{
  margin-top: -58px;
  margin-left: 635px;
  position: fixed;
}

.moreProfile{
  margin-top: -58px;
  position: fixed;
  margin-left: 710px;
}

.finalBio {
  margin-left: 7px;
}

</style>

<img class="cover" src="img/cover.png" alt="coverImage">
<img class="pfp" id="thePFP" src="img/pfp.png">

<div class="profile-pic-div">
  <img src="img/cam.png" class="camera" id="camera">
  <input type="file" class="file" id="file" accept="image/*" style="cursor: pointer">
</div>

<script type="text/javascript">

const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#thePFP');
const file = document.querySelector('#file');

file.addEventListener('change', function(){
  // this refers to the file
  const choosedFile = this.files[0];

if (choosedFile) {
  const reader = new FileReader;

  reader.addEventListener('load', function(){
    img.setAttribute('src', reader.result);
  });

  reader.readAsDataURL(choosedFile);
}

});

</script>

<div><h1 class="profileName" id="profileName"><?php echo $firstname . "&nbsp;" . $lastname ?></h1></div>
<div><h5 class="profileNext"><?php echo $firstname . "&nbsp;" . $lastname . " ·" . "&nbsp;" . "@" . $firstname.$lastname?></h5></div>

<div class="container"><img onclick="location.href='profile.php'" style="width: 90px; margin-left:1330px; margin-top: -347px; position: fixed; cursor: pointer" src="img/pfp.png" alt="defaultPFP"></div>

<button class="editProfile" id="editProfile"><i style="padding-right: 5px" class="fa fa-edit"></i>Edit Profile</button>
<button class="addToProfile" id="addToProfile"><i style="padding-left: 3px; padding-top: 2px" class="fa fa-plus"></i></button>
<button class="moreProfile" id="moreProfile"><img style="width:20px; height: 20px; padding-left: 2px; padding-top: 3px" src="https://image.flaticon.com/icons/png/512/17/17764.png"></button>

<h3 class="bio" id="bio">Add Bio</h3>

<hr id="theHR1" style="width: 1px; height: 94px; background-color: black; border: none; margin-top: 13px; margin-left: 340px; position: fixed">
<hr id="theHR2" style="margin-top: 128px; margin-left: 5px; width: 23.6%; height: 1px; background-color: black; border:none">

<!-- Amount of characters: 180 -->

<div class="bioContent" id="bioContent" style="position: fixed">
<form class="bioForm" name="bioForm" method="post" id="bioForm">
  <textarea class="theBio" placeholder="Describe who you are" name="theBio" id="theBio"></textarea>
  <input class="bioSave" name="bioSave" id="bioSave" type="submit" value="Save"></input>
</form>
</div>
<button class="bioCancel" name="bioCancel" id="bioCancel">Cancel</button>
<img class="imgPublic" id="imgPublic" src="https://cdn.iconscout.com/icon/free/png-512/earth-global-globe-international-map-planet-world-2-12510.png">
<div id="remainingChars" class="remainingChars">100</div>

<script type="text/javascript">

const textArea = document.getElementById('theBio');
const remainingChars = document.getElementById('remainingChars');
const max_chars = 100;

textArea.addEventListener('input', () => {
  const remaining = max_chars - textArea.value.length;
  const color = remaining < max_chars * 0.1 ? 'red' : null;

  remainingChars.textContent = `${remaining}`;
  remainingChars.style.color = color;
});

</script>

<h3 class="bioEdit" id="bioEdit">Edit Bio</h3>

<div class="finalBio" id="finalBio">
<?php

$theBio = $_POST['theBio'];
echo $theBio;

?>
</div>

<script type="text/javascript">

var addBio = document.getElementById('bio');
var bioContent = document.getElementById('bioContent');
var bioCancel = document.getElementById('bioCancel');
var imgPublic = document.getElementById('imgPublic');
var hey = document.getElementById('remainingChars');

addBio.addEventListener('click', () => {
  bioContent.style.visibility = 'visible';
  bioCancel.style.visibility = 'visible';
  imgPublic.style.visibility = 'visible';
  hey.style.visibility = 'visible';
});

var bioCancel = document.getElementById('bioCancel');
var bioContent = document.getElementById('bioContent');

bioCancel.addEventListener('click', () => {
  bioContent.style.visibility = 'hidden';
  bioCancel.style.visibility = 'hidden';
  imgPublic.style.visibility = 'hidden';
  hey.style.visibility = 'hidden';
});

// var bioSave = document.getElementById('bioSave');
// var edit = document.getElementById('bioEdit');
//
// bioSave.addEventListener('click', () => {
//   edit.style.visibility = 'visible';
// });

</script>

  </body>
</html>
