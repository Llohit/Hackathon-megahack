<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="CSS/stylesss1.css">
<style>
body {
 
            background: url(https://assets.nflxext.com/ffe/siteui/vlv3/69b9cce3-4fdc-4ed0-8825-9b24c97c3993/c6d67868-62c2-4064-b451-cc847235963a/IN-en-20201005-popsignuptwoweeks-perspective_alpha_website_large.jpg)
             no-repeat center center fixed; 
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;">
}
</style>
</head>
<body>
     <div class="box">
    <img src="https://tse4.mm.bing.net/th?id=OIP.ikBTrFhQWWad8pSdFlRx9gHaHa&pid=Api&P=0&w=300&h=300" class="avatar">
         <h1>Login Here</h1>
         <form action="http://localhost/Hackathon/LoginCheck1.php" method="POST">
             <p>Email</p>
             <input type="email" name="email" id="email" placeholder= "Enter Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{3,}$" required>
             <p>Password</p>
             <input type="Password" name="password" id="password" placeholder="Enter Password" required>
             <input type="Submit" name="" value="Login">
         </form>
     
             <a href="http://localhost/Hackathon/Register1.php">
                 <input type="button" name="" value="Sign Up">
                 </a>
          </div>
</body>
</html>
