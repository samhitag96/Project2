<?php

	//answers and countera
	$riddle_counter = $_POST['riddle_counter'];
	$user_answer = $_POST['user_answer'];
	$answer = $_POST['answer'];
	$correct = $_POST['correct'];
	$incorrect = $_POST['incorrect'];
	
	//user riddle answer
	$r_answer = $_POST['r_answer'];
	$r_user_answer = $_POST['r_user_answer'];
	
	$page = array("riddle.php", "riddle2.php","riddle3.php", "riddle4.php");
	$num = rand(1,4);
	//echo "Your answer: " . $user_answer . "<br>";
	//echo "Correct answer: " . $answer . "<br>";
	
	if($_POST['submit_riddle']) {
		if ($r_answer == $r_user_answer) {
		echo "correct! <br><br>";
		$correct++;
		
		}
		else {
			echo "Game Over <br><br>";
			
		}
	}
	else if ($_POST['submit']) {
		if ($user_answer == $answer || $r_answer == $r_user_answer) {
		echo "correct! <br><br>";
		$riddle_counter++;
		$correct++;
		
		if($riddle_counter >= 3) {
			$riddle_counter = 0;
			header("Location: riddle.php");
			exit();
			//page($page, $num);
			
		}
			echo "<br><br>" . $correct . " correct so far" . "<br><br>";
	}
	else {
		echo "Game Over <br><br>";
			echo "<br><br>" . $correct . " correct" . "<br><br>";
		
	}
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
	//echo $answer;
	
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

?>

<html>
	<body>
		<br><br><br>
		<form action="solution.php" method="post">
		
			<label for="inputAnswer">Answer: </label>
			<input type="text" name="user_answer" value="<?php echo $user_answer; ?>">
			<input type="hidden" name="answer" value="<?php echo $answer; ?>">
			<input type="hidden" name="correct" value="<?php echo $correct; ?>">
			<input type="hidden" name="incorrect" value="<?php echo $incorrect; ?>">
			<input type="hidden" name="riddle_counter" value="<?php echo $riddle_counter; ?>">
			<input type="hidden" name="r_answer" value="<?php echo $r_answer; ?>">
			<input type="hidden" name="r_user_answer" value="<?php echo $r_user_answer; ?>">
			<input type="submit" name= "submit" value="Submit Answer">
			
		</form>
	</body>

</html>