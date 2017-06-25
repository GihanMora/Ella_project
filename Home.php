<!DOCTYPE html>

<?php 
session_start();
$con=mysqli_connect("localhost","root","","project1")or die("connection failed!");	
	
?>

	<html>
	<head>
	<title> මව් පිටුව </title>
	<link rel="stylesheet" href="styles.css"/>
	</head>
	
	<body>
		<h1>ඇල්ල ප්‍රාදේශීය සභාව</h1>
		<img src= "Capture.PNG" alt="Emblom"/>
		
		
		
		
		<form method ="post" action ="Home.php"></br>
			<input type="text" name="name" placeholder="නම"/></br></br>
			<input type="password" name="ID" placeholder="රහස්‍ය අංකය"/></br></br>
			<input type="submit" name="sub" value="ඇතුලත් වීම"/></br>
		</form>
		
	<?php
		if(isset($_POST['sub'])){
			
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$id=mysqli_real_escape_string($con,$_POST['ID']);
			$sel="select * from officers WHERE UserName= '$name' AND Password = '$id'";
			$run=mysqli_query($con,$sel);
			$check=mysqli_num_rows($run);
			
			if($check>0){
				echo"<script>window.open('selection.php','_self')</script>";
			}
			else{
				echo "<script type='text/javascript'> alert ('Incorrect user Name or password ');</script>";
			}}
?>
		
	</body>
</html>