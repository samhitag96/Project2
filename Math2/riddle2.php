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
                
                    <h3>A prisoner is told "If you tell a lie we will hang you; if you tell the truth we will 
					shoot you." What can he say to save himself?</h3>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) “You will hang me” </label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) “You will shoot me”</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) “I won’t die until tomorrow”</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) “I will die today”</label>
                    </div>
                
                </li>
                          
            </ol>
    
            <input type="submit" name="submit_riddle" value="Submit Riddle" />
		
		</form>
	
	</div>
	</body>
</html>
