<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:http://localhost/Hackathon/Entry1.php');
}
//database connection
$con=mysqli_connect('localhost','root','');

if(!$con){
	echo "No DB connection";
}
//varibales to take input from form 
$email = $_SESSION['email'];
$rating= $_POST['ratings'];


//selection of database where the input data will be stored
mysqli_select_db($con,'proj_register');

// Attempt insert query execution
if(isset($_POST['action_button'])){

$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `thefam` = '$rating' WHERE `info`.`email` = '$email' ";
	$reg2="select AVG(NULLIF(thefam,0)) as 'avgfam' from info";
	$res=mysqli_query($con,$reg2);
	$data=mysqli_fetch_array($res);
	//echo "Average of ff".$data['avgfam'];
	$_SESSION['AvgRating']=$data['avgfam'];
	//echo $_SESSION['AvgRating'];
	
	$result1=mysqli_query($con,$reg1);
echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "http://localhost/Hackathon/TheFamilyGuy.php";</script>';

	
}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}

}
else if(isset($_POST['action_button1']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `mirzapur` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
	$reg2="select AVG(NULLIF(mirzapur,0)) as 'avgmirza' from info";
	$res=mysqli_query($con,$reg2);
	$data=mysqli_fetch_array($res);
	//echo "Average of ff".$data['avgfam'];
	$_SESSION['AvgRating1']=$data['avgmirza'];
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "http://localhost/Hackathon/Mirzapur.php";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button2']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `sacredgames` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "SacredGames.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button3']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `theoffice` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "TheOffice.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}


else if(isset($_POST['action_button4']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `bigbang` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "TheBigBangTheory.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}



else if(isset($_POST['action_button5']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `brooklyn` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "Brooklyn_Nine_Nine.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}


else if(isset($_POST['action_button6']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `breakingbad` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "BreakingBad.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button7']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `got` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "GameOfThrones.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}



else if(isset($_POST['action_button8']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `riverdale` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "Riverdale.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}


else if(isset($_POST['action_button9']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `narcos` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "Narcos.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}


else if(isset($_POST['action_button10']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `moneyheist` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "MoneyHeist.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}


else if(isset($_POST['action_button11']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `peaky` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "PeakyBlinders.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button12']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `friends` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "Friends.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button13']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `pyhoms` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "PutYourHead.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}

else if(isset($_POST['action_button14']))
{
$reg= "select *from info where email ='$email'";
$result=mysqli_query($con,$reg);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
	$reg1= "UPDATE `info` SET `vampire` = '$rating' WHERE `info`.`email` = '$email' ";
	$result1=mysqli_query($con,$reg1);
		echo "<script>alert('Your Response is successfully recorded ');</script>"; 
echo '<script>window.location.href = "TheVampireDiaries.html";</script>';


}
else{
	echo '<script>alert("Please Register before rating")</script>';
     echo '<script>window.location.href = "http://localhost/Hackathon/Register1.php";</script>';
}
	
	
}





 else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);
?>