<?php

$servername = "localhost";
$username = "root";
$password = "password";

$connection = mysqli_connect('localhost', 'root', 'password','project');

if(mysqli_connect_errno()){
	die('database connection dawn');
}
else{
	echo "connection success";
}

?>


<?php
	session_start();
	
	$id = $_SESSION['id'];
	if(!$_SESSION['id']){
	header("location:register.php");

	$que1 ="SELECT bill  FROM calculation_log WHERE (id={$id})";
	$res1 = mysqli_query($connection,$que1);
	$array1 = mysqli_fetch_array($res1);
	$bill = $array1[0];
	echo $bill;
	}
?>
<DOCTYPE html>
<head>
	<title></title>
</head>
<body>
	<form action='gewima.php' method='post'>
			<table class = 'table'>
				<tr><td><h3>ගෙවන මුදල</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='number' required = 'true' placeholder = 'ගෙවන මුදල' name='id'></td>
				
				</tr>
				
				
				
				
				
				
				
				
				
				
			
				
			
			</table>		
		
		</form>
</body>