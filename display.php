<?php
require('db.php');
session_start();
if(!isset($_SESSION["username"])){
header("Location: basicdiary.php");
exit(); }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaystyle9.css">
    <title>DIARY DISPLAY</title>
    
</head>
<body>

<div class="bg-image">
        <img src="displaybg.jpg" class = "image" >
    </div>
    <div class="box">
   
<?php

$date = date("Y-m-d");

$sql = "SELECT * FROM diary_entry where username ='$_SESSION[username]';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>DATE</th><th>DIARY</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>&nbsp&nbsp".$row["Date"]."</td><td>&nbsp&nbsp&nbsp&nbsp".$row["Diary"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();

?>
</div>

<div class="footer"> <a href = "start.php" >
  <button type = "button" class = "back">BACK</button><br>
  </a> <br></div>


</body>
</html>
