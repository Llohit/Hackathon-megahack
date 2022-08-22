<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location:http://localhost/Hackathon/Enter1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>BingeFlix</title>
    <link rel="stylesheet" href="CSS/Homepage.css">
	
    <link rel="icon" href="https://img.icons8.com/wired/64/000000/tv-show.png"/>
	
    <style>

@import url("https://fonts.googleapis.com/css?family=Roboto:700,900");

body {

background-color: #fe4040;
background-image: linear-gradient(90deg, Purple 0%, #70dcfa 100%);
}
#myVideo {
  position: fixed;
  right: 0;
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
}

.txt {
  text-align: center;
  font-family: "Roboto";
  font-size: 12vmin;
  font-weight: 700;
  animation: logo 3.5s infinite;
  outline: none;
  white-space: nowrap;
}

@keyframes logo {
  0% {
    color: #f3f3f3;
    transform: scale(1.5, 1.5);
  }
  10% {
    color: #f3f3f3;
    transform: scale(1.5, 1.5);
  }
  15% {
    color: #f3f3f3;
  }
  20% {
    color: #e90418;
    text-shadow: none;
    transform: scale(1.1, 1.1);
  }
  75% {
    opacity: 1;
  }
  80% {
    opacity: 0;
    color: #e90418;
    transform: scale(0.85, 0.9);
  }

  100% {
    opacity: 0;
  }
}
        
        div.logout {
  position: absolute;
  width: 50%;
  bottom: 10px;
} 

.content{
width: 100%;
 position: fixed;
}  


    </style>
    
</head>
<body> 
 <video autoplay muted loop id="myVideo">
  <source src="https://videos.ctfassets.net/4cd45et68cgf/ihQGzmRN3CX9KYPkzRJFt/6eea6cd4f60a23486879b2e109856c08/NETFLIX_3D_Streams_Pillars_001_5mb__2_.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>   
<div class="content" >
    <ul>
      <li><a href="http://localhost/Hackathon/Homepage.php" class="active">Home</a></li>
      <li>
          <div class="Categories">
            <button class="Categoriesbtn">Categories</button>
            <div class="Categories-content">
                <a href="Action_and_Adventure.html">Action and Adventure</a>
                <a href="Comedy.html">Comedy</a>
                <a href="Drama.html">Drama</a>
                <a href="Crime.html">Crime</a>
                <a href="Romance.html">Romance</a>
            </div>
          </div>
      </li>
      <li><a href="Contacts.html">Contact</a></li>
      <li><a href="About.html">About</a></li>
    </ul>
    <h1 style="text-align: center; font-size: 3em;color:white;font-family: 'Lobster', cursive;">WELCOME TO</h1>
    <div class="txt" contenteditable="true">
      BingeFlix
    </div>
    <h1 style="text-align: center; font-size: 3em;color:white;font-family: 'Lobster', cursive;">GET ALL THE INFORMATION</h1>
    <h1 style="text-align: center; font-size: 3em;color:white;font-family: 'Lobster', cursive;">OF YOUR FAVOURITE TV-SHOW!</h1>
    <div style="text-align: center;">
        <a href="Top5.xml">
        <input type="button" value="Top 5 Series" style="color: white; background-color: red; height: 35px; width: 150px; border-radius: 5px; padding: 5px; font-size: 1.2em; font-family:serif;"></a>
    </div>
    <audio autoplay> 
      <source src="https://zedge-ringtones.com/ringtones/f674c7deb01b7b02045328a85d03783b.mp3">
    </audio><br><br><br>
    <div class="logout" style="position: fixed;
  bottom: 0;" >
<?php
  echo "<h3 style='display:inline; color:pink;'>Logged in as </h3><h3 style='display:inline; color:pink;'>".$_SESSION['email']."</h3>" ;
  ?>
    <a href="Login1.html">
        <input type="button" value="Log Out" style="color: white; background-color: red; height: 28px; width: 100px; border-radius: 5px; padding: 3px; font-size: 1.1em; font-family:serif;">
    </a>
    </div>
	</div>
	
</body>
</html>
    