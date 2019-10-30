<html>
	<body>
	<?php
session_start();
?>
	<div id="over">
	<h1>GAME OVER</h1>
	</div>
	<?php 
		echo $_SESSION["user"]
		
		?>
		
	<form action="login.php" method="post">
			
          
			<input type="submit" name= "submit" value="Start Over">
			
		
	</form>
	</body>
	
</html>