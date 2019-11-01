<?php
	session_start();
?>

<?php 
	
	$_SESSION["r_answer"] = "A";
	$r_user_answer = "";


?>

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	
	
	<body>
		<div id="page-wrap">
		<h1>Riddle Me This</h1>
		
		<form action="solution.php" method="post">
		
            <ol>
            
                <li>
                
                    <h3>A man is found murdered on a Sunday morning. His wife calls the police, who question the 
					wife and the staff, and are given the following alibis: the wife says she was sleeping, the butler was cleaning the closet, the gardener was picking vegetables, the maid was getting the mail, and the cook was preparing breakfast.
					Immediately, the police arrested the murderer. Who did it and how did the police know?
					</h3>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) The maid did it. There is no mail on Sundays </label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) The wife did it. How would she know what everyone else was doing?</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) The butler did it. Cleaning the closet was a cover up</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) The gardener did it. You can’t pick vegetables on a Sunday morning.</label>
                    </div>
                
                </li>
                          
            </ol>
			<input type="submit" name="submit_riddle" value="Submit Riddle" />
		
		</form>
	
	</div>
	</body>
</html>

<?php
	
?>