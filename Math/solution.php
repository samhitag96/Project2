<?php

	$user_answer = $_POST['user_answer'];
	$answer = $_POST['answer'];
	$correct = "";
	
	echo "Your answer: " . $user_answer . "<br>";
	echo "Correct answer: " . $answer . "<br>";
	
	
	if ($user_answer == $answer) {
		echo "correct! <br>";
		$correct++;
	}
	else {
		echo "incorrect <br>";
	}
		
		
?>
