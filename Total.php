<?php
	session_start();
	
	echo "Total: " . $_SESSION['submit'];
	if(!empty($_POST['acpt']))
	{
		header("Location: Lab.php");
		
	}
	if(!empty($_POST['rjt']))
	{
		header("Location: Lab.php");
		
	}
		
	
?>
<html>
	<body>
		<form action="Total.php"method="post">
			<input type ="submit" name="acpt"value="Accept">
			<input type ="submit" name="rjt"value="Reject">
		</form>
	</body>
</html>
