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
			$write = ($_SESSION["score"] . "," . $_SESSION["name"]);                        	
			$newfile = file_get_contents($file);
			$newfile .= $write . "\n";
			file_put_contents($file, $newfile);
			
			
		}
		
		
		//print out file data
		    $myFile = file_get_contents($file);
			$dataArray = explode("\n", $myFile);
			echo "<table>";
			echo "<tr>";
			echo "<th> Name </th>"; 
			echo "<th> Score </th>";
			echo "</tr>";
            
			rsort($dataArray);
			for($i=0; $i<sizeof($dataArray); $i++) {
			$fileNames = explode(",", $dataArray[$i]);
			$location = $i + 1;
			echo "<tr>";
			echo "<td>" . $fileNames[0]; "</td>";
			echo "<td>" . $fileNames[1]; "</td>";
			echo "</tr>";
		
			}
				
	?>
	
	
		
	<?php
		session_destroy();
	?>

	<form action="login.php" method="post">
			
          
			<input type="submit" name= "submit" value="Start Over">
			
		
	</form>
	</body>
	
</html>
