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

<DOCTYPE html>
<head>
	<title>sthawara gasthu</title>
	<link href = "Jala_Sapayum_meter_reading.css" type = "text/css" rel = "stylesheet">
</head>
<body>
		<h1>ජල බිල්පත් - මිටර කියෙවුම්</h1>
		<div class="gewim">
		<h2>මුදල් ගෙවිම</h2>
		<form action='Jala_Sapayum_meter_reading.php' method='post'>
			<table class = 'table'>
				<tr><td><h3>ගිණුම් අoකය</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='number' required = 'true' placeholder = 'ගිණුම් අoකය' name='id'></td>
				
				</tr>
				
				
				
				
				<tr><td><h3>නම</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='text' required = 'true' placeholder = 'නම' name='name'></td>
				
				</tr>
				
				
				
				
				
				<tr><td><h3>ඒකක ගණන</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='integer' required = 'true' placeholder = 'ඒකක ගණන' name='unit' ></td>
				
				</tr>
				
				
				
				<tr><td><input class = 'button' type='submit' name='submit' value='තහවුරු කරන්න' ></td>
				
				</tr>
				
				
				
				
				
			
				
			
			</table>		
		
		</form>
		</div>
		
		<div class = "warthawa">
			<ul>
			<li><a href = "meter_entrytble.php" target="_self" class ="button" > වර්තාව පිරික්සීම</a><li>
			
			<li><a href="Jala_Sapayum.php" target="_self" class ="button">ප්‍රදාන මෙනුව</a><li>
			
			</ul>
		
		</div>
		
	
	

</body>

<?php
	session_start();
	
	if(isset($_POST['submit'])){
		$id=$_POST['id'];
		$name=$_POST['name'];
		$unit = $_POST['unit'];
		$link = "<script>window.open('pay.php')</script>";
		
		$que = "UPDATE calculation_log SET units = $unit WHERE (id={$id})";
		$res = mysqli_query($connection,$que);
		
		$que1="SELECT balance  FROM calculation_log WHERE (id={$id})";
		$res1=mysqli_query($connection,$que1);
		
		
		
		if($res1){
			echo "success";
			$array=mysqli_fetch_array($res1);
			echo $array[0];
		
			echo $unit*10;
			$cost = $unit*10;
			$bill = $unit*10-$array[0];
			echo $bill;
			
			
			$que2 = "SELECT bill  FROM calculation_log WHERE (id={$id})";
			$res2 = mysqli_query($connection,$que2);
			if($res2){
				$arrayprebill = mysqli_fetch_array($res2);
				$prebill = $arrayprebill[0];
				echo "success2";
				
				$que3 = "UPDATE calculation_log SET prebill = $prebill WHERE (id={$id})";
				$res3 = mysqli_query($connection,$que3);
				if($res3){
					echo "success3";
				}
				
				$que4 = "UPDATE calculation_log SET bill = $bill WHERE (id={$id})";
				$res4 = mysqli_query($connection,$que4);
				if($res4){
					echo "success4";
					
					$que5 = "UPDATE calculation_log SET cost = $cost WHERE (id={$id})";
					$res5 = mysqli_query($connection,$que5);
					if($res5){
						$_SESSION['id'] = $id;
					
						echo $link;
					}
			
					
				}
			}
			
			
			
		}
		
		
		
		
		
	
		
	
		
		
		
		
		
		
	}

?>
