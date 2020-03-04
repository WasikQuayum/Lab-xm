<?php
	session_start();
	$cri=$hand=$swmng=$bab="";
	$criE=$handE=$swmng=$bbE="";
	$Error="";
	$total="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if((!empty($_POST['crk'])or !empty($_POST['bb']))and empty($_POST['swim']))
		{
			$cri= $_POST['crk'];
			$bab= $_POST['bb']; 
			$total=$_POST['crk']+$_POST['bb'];
			$_SESSION['submit']=$total;
			  
			 header("Location: Total.php");
		}
		if(empty($_POST['crk'])and(!empty($_POST['swim'])or !empty($_POST['bab'])))
		{
			$swmng= $_POST['swim'];
			$bab= $_POST['bb'];
			$total=$_POST['swim']+$_POST['bb'];
			$_SESSION['submit']=$total;
			
			
			 header("Location: Total.php");
		}
		if((!empty($_POST['crk'])or!empty($_POST['swim']))and empty($_POST['bb']))
		{
			$swmng= $_POST['swim'];
			$cri= $_POST['crk'];
			$total=$_POST['crk']+$_POST['swim'];
			$_SESSION['submit']=$total;
			 header("Location: Total.php");
		}
		if(!empty($_POST['crk'])and !empty($_POST['swim'])and !empty($_POST['bb']))
		{
			$Error="YOU Can not Chose 3 sports";
		}
		
	}
?>

<html>
	<body>
		<form action="Sports(s)selection.php" method="post">
		 <input type="checkbox" name="crk" value="200"><label>Cricket(200)</label><br>
		 
		   <input type="checkbox" name="swim" value="100"><label>Swimming(100)</label><br>
		    <input type="checkbox" name="bb" value="150"><label>Basketball(150)</label><br>
				<input type="submit" name="submit" value="OK">
				</form>
				<h1><?phpecho $Error;?></h1>
				
	</body>
</html>