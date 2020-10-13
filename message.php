<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: start.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="messagestyle4.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    
</head>


<body>

<div class="box">
    <div class="contact">REACH US AT </div><br><br>

    <a href="#" class="fa fa-google" onclick="openNav()"></a>
    <a href="#" class="fa fa-instagram " onclick="openNav2()"></a>
    <a href="#" class="fa fa-facebook" onclick="openNav3()"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-linkedin"  onclick="openNav4()"></a>
<a href = "start.php" ><br><br>
  <button type = "button" class = "back">BACK</button><br>
  </a>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <div class="send">MAIL US AT </div>
  <br><br>
  <p>✉  maitreyeepaliwal@gmail.com
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;✉ c.rishita.reddy@gmail.com
</p>
</div>

<div id="mySidenav2" class="sidenav2">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <div class="send">INSTAGRAM ACCOUNT</div>
  <br><br>
  <p>📱 arts_shack
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;📱  amateur_at_art_
</p>
</div>


<div id="mySidenav3" class="sidenav3">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
  <div class="send">FACEBOOK ACCOUNT</div>
  <br><br>
  <p>💻  Maitreyee Paliwal
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💻  Rishita Reddy
      </p>   
</div>

<div id="mySidenav4" class="sidenav4">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav4()">&times;</a>
  <div class="send">LINKEDIN ACCOUNT</div>
  <br><br>
  <p class="p">💻  linkedin.com/in/maitreyee-paliwal-262260193
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;💻  linkedin.com/in/rishita-reddy-06078718b
      </p>   
</div>
    
    




</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "1327px";
  document.getElementById("mySidenav").style.height = "260px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function openNav2() {
  document.getElementById("mySidenav2").style.width = "1327px";
  document.getElementById("mySidenav2").style.height = "260px";
}
function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0";
}
function openNav3() {
  document.getElementById("mySidenav3").style.width = "1327px";
  document.getElementById("mySidenav3").style.height = "260px";
}
function closeNav3() {
  document.getElementById("mySidenav3").style.width = "0";
}
function openNav4() {
  document.getElementById("mySidenav4").style.width = "1327px";
  document.getElementById("mySidenav4").style.height = "260px";
}
function closeNav4() {
  document.getElementById("mySidenav4").style.width = "0";
}
</script>



</body>
</html>
