<?php
require('db.php');
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
    <link rel="stylesheet" href="feedbackstyle.css">
    <title>DIARY DISPLAY</title>
    
</head>
<body>
    <div class="box1">
<img src="feedback.jpg" class = "image">
</div>
<div class="box3">
    <p>Please fill the </p><br>
    FEEDBACK FORM<br><br>
    <p>Thank you!</p>
</div>
    
    <div class="box2">
    
<form action = "" name = "Form"  method ="post" required>
             <div class="name">NAME</div><br><br>
            <input type = "text " name = "username" class = "USER1" placeholder  = "XYZ" required><br><br>
            <div class="name">AGE</div><br><br>
            <input type = "text" name = "age" class = "USER1" required><br><br><br>
            <div class="name">FEEDBACK</div><br><br>
            <textarea name="Remarks" placeholder="Remarks"></textarea><br><br>
            
            <button type = "submit" name = "submit" onClick="window.location='start.php';">Submit</button>

            <br><br>

            <?php
 
              if (isset($_POST['submit']))
              {
              $name   = $_POST['username'];
              $age  = $_POST['age'];
              $remark   = $_POST['Remarks'];
              $name = mysqli_real_escape_string($conn,$name);
              $age = mysqli_real_escape_string($conn,$age);
              $remark = mysqli_real_escape_string($conn,$remark);
              $query1 =  "INSERT INTO `feedback` (`name`,`age`,`remark`) VALUES('$name', '$age','$remark');" ;
                mysqli_query($conn,$query1); 
            }
              
              
            
?>
            

        </form>
</div>
</body>
</html>