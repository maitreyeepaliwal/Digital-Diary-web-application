<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<link rel="stylesheet" href="registration.css" />
</head>
<body>
<div class="bg-image">
        <img src="registration.jpg" class = "image">
    </div>
    <div class="login">

<?php
require('db.php');
if (isset($_POST['username']))
{
    $var = 0;

	
    if(isset($_POST['DiaryName']))
    {

    $Name = stripslashes($_POST['Name']);
    $Name = mysqli_real_escape_string($conn,$Name);

    $username = stripslashes($_POST['username']);
	$username = mysqli_real_escape_string($conn,$username); 

    $Email = stripslashes($_POST['Email']);
    $Email = mysqli_real_escape_string($conn,$Email);

    $password = stripslashes($_POST['password']);
    $password = mysqli_real_escape_string($conn,$password);

    $PhoneNumber = ($_POST['PhoneNumber']);

    $DiaryName = stripslashes($_POST['DiaryName']);
    $DiaryName = mysqli_real_escape_string($conn,$DiaryName);
    
    $startdate = date("Y-m-d H:i:s");


    if(!filter_var($Email, FILTER_VALIDATE_EMAIL))
    {
        $msg = 'The Email you have entered is invalid, please try again.';
        echo $msg;
    }else{

        $query = "INSERT INTO `users` (`username`, `password`, `Email`, `startdate`) VALUES ('$username', '".md5($password)."', '$Email', '$startdate');"; 
        $result1 = mysqli_query($conn,$query);
        $query = "INSERT INTO `user_profile` ( `username`, `Name`, `Email`, `PhoneNumber`, `DiaryName`) VALUES ('$username', '$Name', '$Email', '$PhoneNumber', '$DiaryName');";
        $result2 = mysqli_query($conn,$query);
        $query = "INSERT INTO `diary_entry` ( `username`) VALUES ('$username');";
        $result3 = mysqli_query($conn,$query);

        if($result2)
        {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to start <a href='start.php'>Login</a></div>";
        }
  }  
  $conn->close();
    }
        }
    


else{

?>

<div class="form">
<h1>Register Here!!</h1>
<form name="registration" action="" method="post">
<input type = "Name" name ="Name" placeholder="Name" required/>
<input type="text" name="username" placeholder="username" required />
<input type="Email" name="Email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<br><br>
<input type = "int" name = "PhoneNumber" placeholder="Phone no." required/>
<input type = "text" name = "DiaryName" placeholder="Wanna name your Diary??" />
<input type="submit" name="submit" value="Click me to Register" />
</form>
</div>
<?php } ?>
</body>
</html>