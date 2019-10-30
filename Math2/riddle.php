<?php 
	
	$r_answer = "A";
	$r_user_answer = "";
	
	
?>

<html>
	<head>
	<link href="style.css" rel="stylesheet">
	</head>
	
	<body>
		<div id="page-wrap">
		<h1>Riddle Me This</h1>
		
		<form action="riddle_solution.php" method="post">
		
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
			<input type="hidden" name="r_answer" value="<?php echo $r_answer; ?>">
			<input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="submit" name="submit_riddle" value="Submit Riddle" />
		
		</form>
	
	</div>
	</body>
</html>

<?php
	
?>