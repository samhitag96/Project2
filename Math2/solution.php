<?php
	session_start();
?>

<?php
	
	$user_answer = $_SESSION["user_answer"];
	$score = $_SESSION["score"];
	
	if(isset($_POST['submit'])){
		$_SESSION["user_answer"] = $_POST["user_answer"];
	}
	else if(isset($_POST['submit_riddle'])) {
		$_SESSION["r_user_answer"] = $_POST['r_user_answer'];
		
		if ($_SESSION["r_user_answer"] == $_SESSION["r_answer"]){
			$_SESSION['score']++;
		
		}
		else {
		echo "Game Over <br><br>";
			echo "<span id=\"score\">Score: </span>" . $_SESSION['score'] .  "<br><br>";
			header("Location: gameover.php");
			exit();
		}
	}
	
	
	$page = array("riddle.php", "riddle2.php","riddle3.php", "riddle4.php");
	$num = rand(1,4);
	
	
	if($_SESSION["user_answer"] == $_SESSION["answer"]) {
		$_SESSION["riddle_counter"]++;
		$_SESSION['score']++;
		
		echo "Score: ". $_SESSION['score'] . "<br><br>";
		echo "<div id=\"first\">";
		echo "<br><br>Correct!<br><br>";
			
		if($_SESSION["riddle_counter"] >= 3) {
			$_SESSION["riddle_counter"] = 0;
				page($page, $num);
		}
	}
	else {
		echo "Game Over <br><br>";
			echo "<span id=\"score\">Score: </span>" . $_SESSION['score'] .  "<br><br>";
			header("Location: gameover.php");
			exit();
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
	
	$operator = array("+", "-", "*");
	$num1 = rand(1,10);
	$num2 = rand(1,10);
	$num3 = rand(0,2);

	echo $num1 . $operator[$num3] . $num2 . " = ";
	$_SESSION["answer"] = operator($num1, $num2, $operator[$num3]);
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
			<input type="submit" name= "submit" value="Submit Answer">
			
		</form>
		<br><br>
		
		<form action="gameover.php" method="post">
		
			<input type="submit" name= "submit" value="End Game">
			
		</form>
	</body>

</html>