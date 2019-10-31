<?php
	session_start();
?>

<html>

	<head>
		<link href="style.css" rel="stylesheet">
	</head>
	
	<body>
	
	<div id="over">
	<h1>GAME OVER</h1>
	</div>
	<?php 
		//arsort($_SESSION);
		
		$file = "leaderboard.txt";
		//add session to file	  
		if(isset($_SESSION["name"]) && isset($_SESSION["score"])) {
			$write = ($_SESSION["name"] . "," . $_SESSION["score"]);                        	
			$newfile = file_get_contents($file);
			$newfile .= $write . "\n";
			file_put_contents($file, $newfile);
			
			
		}
		
		
		//print out file data
			$dataArray = explode("\n", file_get_contents($file));
			for($i=0; $i<sizeof($dataArray); $i++) {
			echo $dataArray[$i] . "<br>";
			}	
	?>
	
	<table>
	</table>
		
	<?php
		session_destroy();
	?>

	<form action="login.php" method="post">
			
          
			<input type="submit" name= "submit" value="Start Over">
			
		
	</form>
	</body>
	
</html>