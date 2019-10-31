<?php
	session_start();
?>

<?php
	
	
	$_SESSION["r_user_answer"] = $_POST['r_user_answer'];
	
	if ($_SESSION["r_user_answer"] == $_SESSION["r_answer"]) {
		echo "correct! <br><br>";
		$_SESSION["score"]++;
	}
	else {
		header("Location: gameover.php");
		exit();
		
	}
	
	$page = array("riddle.php", "riddle2.php");
	$num = rand(1,4);

	
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	
	
	<body>
		<div id="page-wrap">
		
		<form action="solution.php" method="post">
			
            <input type="submit" name="continue" value="Continue" />
		
		</form>
	
	</div>
	</body>
</html>
