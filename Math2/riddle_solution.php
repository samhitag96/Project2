<?php
	
	$riddle_counter = "";
	$correct = "";
	$incorrect = "";
	$user_answer = "";
	$answer = "";
	
	$o_count = 0;
	$r_answer = $_POST['r_answer'];
	$r_user_answer = $_POST['r_user_answer'];
	
	if ($r_answer == $r_user_answer) {
		echo "correct! <br><br>";
		$o_count++;
		$correct++;
	}
	else {
		echo "Game Over <br><br>";
		
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
    
			<input type="hidden" name="o_count" value="<?php echo $o_count; ?>">
			<input type="hidden" name="riddle_counter" value="<?php echo $riddle_counter; ?>">
			<input type="hidden" name="correct" value="<?php echo $correct; ?>">
			<input type="hidden" name="incorrect" value="<?php echo $incorrect; ?>">
			<input type="hidden" name="answer" value="<?php echo $answer; ?>">
			<input type="hidden" name="user_answer" value="<?php echo $user_answer; ?>">
			
            <input type="submit" name="continue" value="Continue" />
		
		</form>
	
	</div>
	</body>
</html>
