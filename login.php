<?php
session_start();

$username="user";
$password="password";

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']==true){
    header("Location: leaderboard.php");
}

if(isset($_POST['username']) && isset($_POST['password'])){
    if($_POST['username']== $username && $_POST['password']== $password){
        $_SESSION['logged_in'] = true;
        header("Location: leaderboard.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title> Login Page </title>
</head>
<body>
    <div id="main">
    <h1> Welcome To The Trivia Game! </h1>
    <div id="login">
    <h2> Please Login </h2>
    <form action ="leaderboard.php" method="post">
     <label> Username: </label><br>
     <input type ="text" name ="username"> <br>
     <label> Password: </label> <br>
     <input type="password" name ="password"> 
     <input type ="submit" value="Get Started!">
    </form>
    </body>
    </html>