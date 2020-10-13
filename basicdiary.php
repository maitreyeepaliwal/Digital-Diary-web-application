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
    <link rel="stylesheet" href="basicdiarystyle8.css">
    <title>Diary</title>
    
</head>
<body>
 



<div class = "buttons">
  <button type = "button" class = "class1" onclick="openNav()">CUSTOM</button><br>
  <button type = "button" class = "class2" onclick="openNav1()"> BACKGROUND COLOR</button><br>
  <button type = "button" class = "class3" onclick="openNav2()">FONT</button><br>
  <button type = "button" class = "class4" onclick="openNav3()" >DIARY BACKGROUND COLOR</button><br>
  <a href = "start.php" >
  <button type = "button" class = "class5">BACK</button><br>
  </a> 
 
</div>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <button type = "button" class = "background1" onclick="changeBodyBg();"><img src="bg2.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg3();"><img src="bg3.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg4();"><img src="bg4.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg5();"><img src="bg5.jpg"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  <button type = "button" class = "background1" onclick="changeBodyBg6();"><img src="bg6.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg7();"><img src="bg7.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg8();"><img src="bg8.jpg"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background1" onclick="changeBodyBg10();"><img src="bg10.jpg"></button>&nbsp;&nbsp;&nbsp;
  <div id="changebg">SELECT YOUR FAVOURITE IMAGE FOR THE DAY!!</div>
</div>



<div id="mySidenav1" class="sidenav1">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav1()">&times;</a>
  <button type = "button" class = "background2" style = "background-color:#ccddff" onclick="BodyBg('#ccddff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#99bbff" onclick="BodyBg(' #99bbff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#80aaff" onclick="BodyBg('#80aaff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#4d88ff" onclick="BodyBg('#4d88ff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#3377ff" onclick="BodyBg('#3377ff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#1a66ff" onclick="BodyBg('#1a66ff');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  <button type = "button" class = "background2" style = "background-color:#ff8080" onclick="BodyBg('#ff8080');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#ff6666" onclick="BodyBg('#ff6666');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#ff5050" onclick="BodyBg('#ff5050');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#ff4d4d" onclick="BodyBg('#ff4d4d');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#ff3333" onclick="BodyBg('#ff3333');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#ff1a1a" onclick="BodyBg('#ff1a1a');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  <button type = "button" class = "background2" style = "background-color:#80ffaa" onclick="BodyBg('#80ffaa');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#33ff77" onclick="BodyBg('#33ff77');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#1aff66" onclick="BodyBg('#1aff66');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#00ff55" onclick="BodyBg('#00ff55');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#00e64d" onclick="BodyBg('#00e64d');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#00cc44" onclick="BodyBg('#00cc44');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  
  <button type = "button" class = "background2" style = "background-color:#ecc6ec" onclick="BodyBg('#ecc6ec');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#df9fdf" onclick="BodyBg('#df9fdf');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#d98cd9" onclick="BodyBg('#d98cd9');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#cc66cc" onclick="BodyBg('#cc66cc');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#c653c6" onclick="BodyBg('#c653c6');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background2" style = "background-color:#993399" onclick="BodyBg('#993399');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  
</div>

  

  <div id="mySidenav2" class="sidenav2">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <button type = "button" id = "fontid1" class = "font1" onclick="changefont1();">Times New Roman</button><br><br><br>
  <button type = "button" id = "fontid2" class = "font2" onclick="changefont2();">Impact, 'Haettenschweiler', 'Arial Narrow Bold', sans-serif</button><br><br><br>
  <button type = "button" id = "fontid3" class = "font3" onclick="changefont3();">Verdana, 'Geneva', Tahoma, sans-serif</button><br><br><br>
  <button type = "button" id = "fontid4" class = "font4" onclick="changefont4();">cursive</button><br><br><br>
  <button type = "button" id = "fontid5" class = "font5" onclick="changefont5();">monospace</button><br><br><br>
  <button type = "button" id = "fontid6" class = "font6" onclick="changefont6();">Georgia, 'Times New Roman', Times, serif</button><br><br><br>
  <button type = "button" id = "fontid7" class = "font7" onclick="changefont7();">fantasy</button><br><br><br><br>
  
</div>


<div id="mySidenav3" class="sidenav3">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav3()">&times;</a>
  <button type = "button" class = "background3" style = "background-color:#ccddff" onclick="diaryBg('#ccddff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#99bbff" onclick="diaryBg(' #99bbff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#80aaff" onclick="diaryBg('#80aaff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#4d88ff" onclick="diaryBg('#4d88ff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#3377ff" onclick="diaryBg('#3377ff');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#1a66ff" onclick="diaryBg('#1a66ff');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  <button type = "button" class = "background3" style = "background-color:#ff8080" onclick="diaryBg('#ff8080');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#ff6666" onclick="diaryBg('#ff6666');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#ff5050" onclick="diaryBg('#ff5050');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#ff4d4d" onclick="diaryBg('#ff4d4d');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#ff3333" onclick="diaryBg('#ff3333');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#ff1a1a" onclick="diaryBg('#ff1a1a');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  <button type = "button" class = "background3" style = "background-color:#80ffaa" onclick="diaryBg('#80ffaa');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#33ff77" onclick="diaryBg('#33ff77');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#1aff66" onclick="diaryBg('#1aff66');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#00ff55" onclick="diaryBg('#00ff55');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#00e64d" onclick="diaryBg('#00e64d');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#00cc44" onclick="diaryBg('#00cc44');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  
  <button type = "button" class = "background3" style = "background-color:#ecc6ec" onclick="diaryBg('#ecc6ec');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#df9fdf" onclick="diaryBg('#df9fdf');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#d98cd9" onclick="diaryBg('#d98cd9');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#cc66cc" onclick="diaryBg('#cc66cc');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#c653c6" onclick="diaryBg('#c653c6');"></button>&nbsp;&nbsp;&nbsp;
  <button type = "button" class = "background3" style = "background-color:#993399" onclick="diaryBg('#993399');"></button>&nbsp;&nbsp;&nbsp;<br><br><br><br>
  
</div>

</div>
<!--JAVA SCRIPT-->
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "1243px";
}
function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
function openNav1() {
  document.getElementById("mySidenav1").style.width = "1243px";
}
function closeNav1() {
  document.getElementById("mySidenav1").style.width = "0";
}
function openNav2() {
  document.getElementById("mySidenav2").style.width = "1243px";
}
function closeNav2() {
  document.getElementById("mySidenav2").style.width = "0";
}
function openNav3() {
  document.getElementById("mySidenav3").style.width = "1243px";
}
function closeNav3() {
  document.getElementById("mySidenav3").style.width = "0";
}


//BACKGROUND IMAGE 
function changeBodyBg(){
  document.body.style.backgroundImage = "url('bg2.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }
    function changeBodyBg3(){
  document.body.style.backgroundImage = "url('bg3.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }
    function changeBodyBg4(){
  document.body.style.backgroundImage = "url('bg4.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }
    function changeBodyBg5(){
  document.body.style.backgroundImage = "url('bg5.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }
    function changeBodyBg6(){
  document.body.style.backgroundImage = "url('bg6.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }
    function changeBodyBg7(){
  document.body.style.backgroundImage = "url('bg7.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }

    function changeBodyBg8(){
  document.body.style.backgroundImage = "url('bg8.jpg')" ;
  document.body.style.backgroundSize = "1000px 1000px";
  
    }

    function changeBodyBg10(){
  document.body.style.backgroundImage = "url('bg10.jpg')" ;
  document.body.style.backgroundSize = "500px 500px";
  
    }

    // BACKGROUND COLOR
    function BodyBg(color){
        document.body.style.background = color;
    }

    //FONT
    function changefont1() {
  document.getElementById("mydiary").style.fontFamily = "Times New Roman', Times, serif";
  document.getElementById("fontid1").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont2() {
  document.getElementById("mydiary").style.fontFamily = "Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif";
  document.getElementById("fontid2").style.background = "#cc66cc";
  document.getElementById("fontid1").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont3() {
  document.getElementById("mydiary").style.fontFamily = "Verdana, Geneva, Tahoma, sans-serif";
  document.getElementById("fontid3").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid1").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont4() {
  document.getElementById("mydiary").style.fontFamily = "cursive";
  document.getElementById("fontid4").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid1").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont5() {
  document.getElementById("mydiary").style.fontFamily = "monospace";
  document.getElementById("fontid5").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid1").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont6() {
  document.getElementById("mydiary").style.fontFamily = "Georgia, 'Times New Roman', Times, serif";
  document.getElementById("fontid6").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid1").style.background = "white";
  document.getElementById("fontid7").style.background = "white";
}
function changefont7() {
  document.getElementById("mydiary").style.fontFamily = "fantasy";
  document.getElementById("fontid7").style.background = "#cc66cc";
  document.getElementById("fontid2").style.background = "white";
  document.getElementById("fontid3").style.background = "white";
  document.getElementById("fontid4").style.background = "white";
  document.getElementById("fontid5").style.background = "white";
  document.getElementById("fontid6").style.background = "white";
  document.getElementById("fontid1").style.background = "white";
}

//DIARY BACKGROUND COLOUR

  function diaryBg(color){
        document.getElementById("mydiary").style.background = color;
    }




</script>
<!--JAVA SCRIPT-->
  




<div class="header" >

  

</div>




  


<div id = "box">

      <div class = "paper-left">
      <?php
          $date = date( "D");
          echo $date;
          ?>
      </div>

      <div class="paper-right">
          <?php
          $date = date("M   d  ");
          echo $date;
          ?>
      </div>


      <div class = "article">
          <?php
          
          echo "Hello";
          $sql = "SELECT DiaryName FROM user_profile where username='$_SESSION[username]';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) 
          {
            while($row = mysqli_fetch_array($result)) 
            {
              echo " " . $row[0];
            }
          } else {
            echo " Diary ";
          }
          ?>

<form name="diary" action="" method = "post">
              <textarea name= "diarytoday" class="diarytoday" id = "mydiary" rows="22"  value="">  </textarea>
              <?php
 
              if (isset($_POST['submit']))
              {
              $date = date("Y-m-d");
 
              $Entry   = $_POST['diarytoday'];
              $Entry = mysqli_real_escape_string($conn,$Entry);
              $query1 =  "INSERT INTO `diary_entry` (`Date`,`username`,`Diary`) VALUES('$date', '$_SESSION[username]','$Entry');" ;
              $query2 =  "UPDATE `diary_entry` set `Diary` = '$Entry' where `Date` = '$date' and `username` = '$_SESSION[username]'";
              $q = "SELECT * FROM `diary_entry` WHERE `Date` = '$date' and `username` = '$_SESSION[username]' ";
              $result = $conn->query($q);
              if($result->num_rows > 0)
              {
                mysqli_query($conn,$query2); 
              }
              else{
                mysqli_query($conn,$query1) ;
              }
            }
              
              
            
?>
<a href = "start.php">
 <button type ="submit" name="submit" value="submit" class="save"  > See you tomorrow!</button></a>
              
            
              
          </form>
             
              
              
              

          </form>    
      </div>
 </div>
 <div class="footer"> </div>
</body>
</html>