<html>
	<body>
	
	<div id="over">
	<h1>GAME OVER</h1>
	</div>
	<?php 
		arsort($_COOKIE);
		foreach($_COOKIE as $key => $val)
		{echo "User Name=   " .$key. "    Score = ".$val . "<br>";
		}
		
		?>
		
	<form action="login.php" method="post">
			
          
			<input type="submit" name= "submit" value="Start Over">
			
		
	</form>
	</body>
	
</html>