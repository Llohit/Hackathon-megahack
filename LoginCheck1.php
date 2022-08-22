<?php

//database connection
$con=mysqli_connect('localhost','root','');
$db=mysqli_select_db($con,"proj_register");

session_start();

//varibales to take input from form 
$mail = $_POST['email'];
$pass = $_POST['password'];

//to prevent from mysqli injection
$mail=stripcslashes($mail);
$pass=stripcslashes($pass);
$mail=mysqli_real_escape_string($con,$mail);
$pass=mysqli_real_escape_string($con,$pass);

$sql="select *from info where email='$mail' and password='$pass'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

// Make a safe SQL
@$user = check_input($_POST['name']);
@$pwd = check_input($_POST['pwd']);
$sql = "SELECT * FROM phplogin WHERE
username=$user AND password=$pwd";

$qury = mysqli_query($con,$sql);
$result = mysqli_fetch_array($qury);
 
      if($result[0]>0)
      {
        echo "Successful Login!";
       // $_SESSION['userName'] = $uname;
       // echo "<br />Welcome ".$_SESSION['userName']."!";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
        echo "<br /><a href='logout.php'>LogOut</a>";
      }
      else
      {
        echo "Login Failed";
        echo "<br /><a href='signupform.php'>SignUp</a>";
        echo "<br /><a href='signinform.php'>SignIn</a>";
      }

if($count==1){
    $_SESSION['email']=$mail;
	header('location:http://localhost/Hackathon/Homepage.php');
}
else{
    echo "<h1><center> Login failed. Invalid username or password.</center></h1>";
}
?>
