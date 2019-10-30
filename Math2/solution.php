<?php

	//answers and countera
	$riddle_counter = $_POST['riddle_counter'];
	$user_answer = $_POST['user_answer'];
	$answer = $_POST['answer'];
	$correct = $_POST['correct'];
	$incorrect = $_POST['incorrect'];
	
	
	if(isset($_POST['continue'])) {
		$correct++;
		//echo "<br><br>" . $correct . " correct" . "<br><br>";
	}
	
	//user riddle answer
	
	$page = array("riddle.php", "riddle2.php","riddle3.php", "riddle4.php");
	$num = rand(1,4);
	//echo "Your answer: " . $user_answer . "<br>";
	//echo "Correct answer: " . $answer . "<br>";
	
	if($user_answer == $answer) {
		$riddle_counter++;
		$correct++;
		
		echo "Score: ". $correct . "<br><br>";
		echo "<div id=\"first\">";
		echo "<br><br>Correct!<br><br>";
			
		if($riddle_counter >= 3) {
			$riddle_counter = 0;
				page($page, $num);
		}
	}
	else {
		echo "Game Over <br><br>";
					echo "<span id=\"score\">Score: </span>" . $correct .  "<br><br>";
	}
	

	
	function page($page, $num) {
	  switch ($num) {
		case '1':
		  header("Location: riddle.php");
			exit();
		case '2':
		  header("Location: riddle2.php");
			exit();
		case '3':
		  header("Location: riddle3.php");
			exit();
		  case '4':
		  header("Location: riddle4.php");
			exit();
		}
	}	
?>

<?php
	
	$user_answer = "";
	$operator = array("+", "-", "*");
	$num1 = rand(1,10);
	$num2 = rand(1,10);
	$num3 = rand(0,2);

	echo $num1 . $operator[$num3] . $num2 . " = ";
	$answer = operator($num1, $num2, $operator[$num3]);
	echo "<br><br>";
	
	function operator($num1, $num2, $operator) {
	  switch ($operator) {
		case '+':
		  return $num1 + $num2;
		case '-':
		  return $num1 - $num2;
		case '*':
		  return $num1 * $num2;
		}
	}	
	
?>

<?php
echo "</div>";
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
		<br><br><br>
		<form action="solution.php" method="post">
		
			<label for="inputAnswer">Answer: </label>
			<input type="text" name="user_answer" value="<?php echo $user_answer; ?>">
			<input type="hidden" name="answer" value="<?php echo $answer; ?>">
			<input type="hidden" name="correct" value="<?php echo $correct; ?>">
			<input type="hidden" name="incorrect" value="<?php echo $incorrect; ?>">
			<input type="hidden" name="riddle_counter" value="<?php echo $riddle_counter; ?>">
			<input type="submit" name= "submit" value="Submit Answer">
			
		</form>
	</body>

</html>