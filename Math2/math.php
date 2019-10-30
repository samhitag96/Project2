<?php
	session_start();
?>

<?php
	
	$riddle_counter = "";
	$correct = 0;
	$incorrect = "";
	$user_answer = "";
	$operator = array("+", "-", "*");
	$num1 = rand(1,10);
	$num2 = rand(1,10);
	$num3 = rand(0,2);
	
	$_SESSION["name"] = $_POST["name"];
	
	
	
	echo "<div id=\"first\">  <br><br>";
	echo $num1 . $operator[$num3] . $num2 . " = ";
	$answer = operator($num1, $num2, $operator[$num3]);
	echo "<br><br>";
	echo "</div>";
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

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	<body>
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