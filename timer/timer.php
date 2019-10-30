
<?php
session_start();
$timeout= 10; //number of seconds until it times out

//if the timeout field exists
if(isset($_SESSION['timeout']) && ($_SESSION['timeout'] > $timeout)) {
    $duration = time() - (int)$_SESSION['timeout'];
    if($duration > $timeout) {
        //goes to endgame
        header("location: ./endgame.html");
    }
    else{
        echo  "you have $duration seconds left"; 
    }
}

$_SESSION['timeout'] = time(); //updates the timer to the current time
?>
<br>