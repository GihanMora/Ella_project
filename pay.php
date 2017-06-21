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
	echo "right";
	$id = $_SESSION['id'];
	if(!$_SESSION['id']){
	header("location:register.php");
	}

	echo $id;
	$que ="SELECT name  FROM calculation_log WHERE (id={$id})";
	$res = mysqli_query($connection,$que);
	$array = mysqli_fetch_array($res);
	$name = $array[0];
	echo $name;
	
	$que1 ="SELECT cost  FROM calculation_log WHERE (id={$id})";
	$res1 = mysqli_query($connection,$que1);
	$array1 = mysqli_fetch_array($res1);
	$cost = $array1[0];
	echo $cost;
	
	$que2 ="SELECT balance  FROM calculation_log WHERE (id={$id})";
	$res2 = mysqli_query($connection,$que2);
	$array2 = mysqli_fetch_array($res2);
	$balance = $array2[0];
	echo $balance;
	
	$que3 ="SELECT bill  FROM calculation_log WHERE (id={$id})";
	$res3 = mysqli_query($connection,$que3);
	$array3 = mysqli_fetch_array($res3);
	$bill = $array3[0];
	
	
	$que4 ="SELECT units  FROM calculation_log WHERE (id={$id})";
	$res4 = mysqli_query($connection,$que4);
	$array4 = mysqli_fetch_array($res4);
	$units = $array4[0];
	echo $units;
	$_SESSION['id'] = $id;
	
	
?>

<DOCTYPE html>
<head>
	<title> show bill </title>
	<link href = "pay.css" type = "text/css" rel = "stylesheet">
</head>

<body>
	<h1>බිල් පත</h1>
	
	<table>
		<thead>
			<tr>
				<th>ගිණුම් අoකය</th>
				<th>නම</th>
				<th>ඒකක ගණන</th>
				<th>අය කිරීම</th>
				<th>ඉදිරියට ගෙන ආ ශේශය</th>
				<th>ගෙවීමට ඇති මුදල</th>
			</tr>
			
			<tr>
				
			</tr>
		
		</thead>
		<tbody>
			<tr>
			<td><?php echo $id ?></td>
			<td><?php echo $name ?></td>
			<td><?php echo $units ?></td>
			<td><?php echo $cost ?></td>
			<td><?php echo $balance ?></td>
			<td><?php echo $bill ?></td>
				
			</tr>
		</tbody>
	</table>
	<ul>
	
	</ul>
		<form action='pay.php' method='post'>
			<table class = 'table'>
				<tr><td><h3>ගෙවන මුදල</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='text' required = 'true' placeholder = 'ගෙවන මුදල' name='payment'></td>
				
				</tr>
				<tr><td><input class = 'button' type='submit' name='submit' value='තහවුරු කරන්න' ></td>
				
				</tr>
				
				
			</table>		
		
		</form>
	
	
</body>
<?php
	if(isset($_POST["submit"])){
		$payment = $_POST["payment"];
		$month = Date("m");
		
		
		
		$que5 = "UPDATE calculation_log SET payment = $payment WHERE (id={$id})";
		$res5 =mysqli_query($connection,$que5);
		
		$Nwbalance = $balance+$payment-$cost;
		echo $balance;
		
		$que6 = "UPDATE calculation_log SET balance = $Nwbalance WHERE (id={$id})";
		$res6 = mysqli_query($connection,$que6);
		
		$que7 = "INSERT INTO entrybase (id,payment,month) VALUES ({$id},{$payment},{$month})";
		$res7 = mysqli_query($connection,$que7);
		
		$que9 ="SELECT total FROM calculation_log WHERE (id={$id})";
		$res9 = mysqli_query($connection,$que9);
		$row =mysqli_fetch_array($res9);
		$total = $row[0]+$payment;
		$que10 = "UPDATE calculation_log SET total = $total WHERE (id={$id})";
		$res10 = mysqli_query($connection,$que10);
		
		
		if($month ==1){
			$que8 = "UPDATE calculation_log SET jan=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==2){
			$que8 = "UPDATE calculation_log SET feb=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==3){
			$que8 = "UPDATE calculation_log SET mar=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==4){
			$que8 = "UPDATE calculation_log SET apr=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==5){
			$que8 = "UPDATE calculation_log SET may=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==6){
			$que8 = "UPDATE calculation_log SET jun=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==7){
			$que8 = "UPDATE calculation_log SET july=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==8){
			
			$que8 = "UPDATE calculation_log SET aug=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==9){
			$que8 = "UPDATE calculation_log SET sep=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==10){
			$que8 = "UPDATE calculation_log SET oct=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==11){
			$que8 = "UPDATE calculation_log SET nov=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		else if($month ==12){
			$que8 = "UPDATE calculation_log SET dece=$payment WHERE(id={$id})";
			$res8 = mysqli_query($connection,$que8);
			echo "correct";
		}
		
		
		if($res7){
		echo "<script>alert('payment succeed!!')</script>";
		}
	
	}
	




?>