<?php
	session_start();
	$cri=$hand=$bab="";
	$criE=$handE=$babE="";
	$total="";
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if((!empty($_POST['crk'])or!empty($_POST['bb']))and empty($_POST['hndb']))
		{
			$cri=$_POST['crk'];
			$bab=$_POST['bb'];
			$total=$_POST['crk']+$_POST['bb'];
			$_SESSION['submit']=$total;
			header("Location: Total.php");
		}
		if((!empty($_POST['crk'])or!empty($_POST['hndb']))and empty($_POST['bb']))
		{
			$cri=$_POST['crk'];
			$hand=$_POST['hndb'];
			$total=$_POST['crk']+$_POST['hndb'];
			$_SESSION['submit']=$total;
			header("Location: Total.php");
		}
		if((!empty($_POST['bb'])or!empty($_POST['hndb']))and empty($_POST['crk']))
		{
			$bab=$_POST['bb'];
			$hand=$_POST['hndb'];
			$total=$_POST['bb']+$_POST['hndb'];
			$_SESSION['submit']=$total;
			header("Location: Total.php");
		}
		if(!empty($_POST['crk'])and !empty($_POST['hndb'])and !empty($_POST['bb']))
		{
			$Error="YOU Can not Chose 3 sports";
		}
	}
?>

<html>
	<body>
		<form action="Sports(s)selection(female).php" method="post">
		 <input type="checkbox" name="crk" value="200"><label>Cricket(200)</label><br>
		  <input type="checkbox" name="hndb" value="50"><label>Handball(50)</label><br>
		   
		    <input type="checkbox" name="bb" value="150"><label>Basketball(150)</label><br>
				<input type="submit" name="submit" value="Ok">
		
	</body>
</html>