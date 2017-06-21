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
<<html>
	<head>
		<title>Data Insert</title>
		<link href = "jala_sapayum.css" type = "text/css" rel = "stylesheet">
	
	</head>
	
<body>
		<form action='datainsert.php' method='post'>
			<table class = 'table'>
				<tr><td><h3>ගිණුම් අoකය</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='number' required = 'true' placeholder = 'ගිණුම් අoකය' name='id'></td>
				
				</tr>
				
				
				
				
				<tr><td><h3>නම</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='text' required = 'true' placeholder = 'නම' name='name'></td>
				
				</tr>
				
				
				<tr><td><input class = 'button' type='submit' name='submit' value='තහවුරු කරන්න' ></td>
				
				</tr>
				
				
			
				
			
			</table>		
		
		</form>

</body>


</html>

<?php
	if(isset($_POST['submit'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$pay = 0;
		$bill = 0;
		$balance = 0;
		echo "isset";
		echo $id;
		echo $name;
		
		$query = "INSERT INTO register (id,name) VALUES ({$id},'{$name}')";
		$result = mysqli_query($connection,$query);
		
		$query = "INSERT INTO calculation_log (id,name) VALUES ({$id},'{$name}')";
		$result = mysqli_query($connection,$query);
		
		if($result){
			echo "success";
		}
	
	
	}

?>