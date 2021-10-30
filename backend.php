<?php

if(isset($_POST['uname']) && isset($_POST['psw'])) {
  $uname = $_POST['uname'];
  $psw = $_POST['psw'];
  echo $uname;
} else {
  echo "Not working.";
}

?>
