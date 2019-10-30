<?php
session_start();

$username="user";
$password="password";

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header("Location: math.php");
}


?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="loginstyle.css">
<title> Login Page </title>
</head>
<body>
    <div id="main">
        <div id =logo>
            <img src="trivia.jpg" alt="logo">
     </div>
     <div id="title">
    <h1> Welcome To The Trivia Game! </h1> </div>
    <div id="login">
   <h3> Let's Get Started! </h3> 
   <form action="math.php" method="post">
	<label for="username"> Username </label>
   <input type="text" id="user_name" name="name"/> <br><br>
   <input type="submit" id= "button" value="Begin">
</form>
</div>
</div>
	

    </body>
    </html>
