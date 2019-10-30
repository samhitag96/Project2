<html>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page">

		<h1>Quiz</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $name = $_POST['user'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "B") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            echo "<div id='results'>$totalCorrect</div>";
			setcookie($name, $totalCorrect, time()+ 10);
?>
<form action="leaderboard.php" method="post" id="score">
		<input type="submit" value="View Score" />
	</form
	</div>
	</body>
	</html>