<?php 

	$r_answer = "B";
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
                
                    <h3>Two girls ate dinner together. They both ordered iced tea. One girl drank them very fast 
					and had finished five in the time it took the other to drink just one. The girl who drank one 
					died while the other survived. All the drinks were poisoned. How is this possible?</h3>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">A) The poison works faster the slower you drink it </label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">B) The poison was in the ice</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">C) The other girl had a stronger immune systems</label>
                    </div>
                    
                    <div id="div">
                        <input type="radio" name="r_user_answer" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">D) This is not possible</label>
                    </div>
                
                </li>
                          
            </ol>
 
			<input type="hidden" name="r_answer" value="<?php echo $r_answer; ?>">
			<input type="submit" name="submit_riddle" value="Submit Riddle" />
		
		</form>
	
	</div>
	</body>
</html>

<?php
	
?>