<?php
	session_start();
?>

<?php 
	
	$r_user_answer = "";
	$_SESSION["r_answer"] = "A";
	
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
                
                    <h3>A woman shot her husband, held him underwater for 5 minutes, and went out to dinner with him later that evening. How is this possible?</h3>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="r_user_answer" value="A" />
                        <label for="question-1-answers-A">A) She did it using a camera </label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="r_user_answer" value="B" />
                        <label for="question-1-answers-B">B) He rose from the dead</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="r_user_answer" value="C" />
                        <label for="question-1-answers-C">C) He can hold his breath for a long time</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="r_user_answer" value="D" />
                        <label for="question-1-answers-D">D) Her husband is a ghost</label>
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