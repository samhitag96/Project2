 <?php
session_start();
?>
<?php
//session_start();
$name="user";

/*if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header("Location: solution.php");
}*/
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
   <form action="solution.php" method="post">
		<label for="username"> Username </label>
		<input type="hidden" name="name">
	   <input type="text" id="name" name="name"/> <br><br>
	   <input type="submit" id= "button" value="Begin">
</form>
</div>
</div>
	

    </body>
    </html>