<?php
session_start();
	$sId=$gndr=$phone="";
	$sIdE=$gndrE=$phoneE="";
	
	 
	 if($_SERVER["REQUEST_METHOD"]=="POST")
	 {
		 if(empty($_POST['s_id']))
		 {
			 $sIdE="It canot be blanked";
		 }
		 else
		 {
			 $sId=$_POST['s_id'];
		 }
		  if(empty($_POST['gender']))
		 {
			 $gndrE="must select";
		 }
		 else
		 {
			 $gndr=$_POST['gender'];
		 }
		  if(empty($_POST['phn']))
		 {
			 $phoneE="must fill";
		 }
		 else
		 {
			 $phone=$_POST['phn'];
		 }
		 if(!empty($_POST['phn'])and !empty($_POST['male'])and !empty($_POST['s_id']))
		 {
			 header("Location: Sports(s)selection.php");
		 }
		  if(!empty($_POST['phn'])and !empty($_POST['female'])and !empty($_POST['s_id']))
		 {
			 header("Location: Sports(s)selection(female).php");
		 }
	 }
	
?>
<html>
	<body>
		<form action="Lab.php"method="post">
			<label>Student Id: </label>
			<input type="text"name="s_id" value=""><?php echo $sIdE;?><br>
			<label>Gender: </label>
			<input type="radio"name="male" value="male">Male
			<input type="radio"name="female" value="female">Female <?php echo $gndrE;?><br>
			<label>Phone: </label>
			<input type="text"name="phn" value=""><?php echo $phoneE;?><br>
			
			<input type="submit" name="cont" value="Countinue">
			
		</form>
	</body>
</html>