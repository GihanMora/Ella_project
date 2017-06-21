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
</head>
<body>
		<form action='Jala_Sapayum_sthawara_gasthu.php' method='post'>
			<table class = 'table'>
				<tr><td><h3>ගිණුම් අoකය</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='number' required = 'true' placeholder = 'ගිණුම් අoකය' ></td>
				
				</tr>
				
				
				
				
				<tr><td><h3>නම</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='text' required = 'true' placeholder = 'නම' ></td>
				
				</tr>
				
				
				<tr><td><h3>ලිපිනය</h3></td>
				
				</tr>
				
				<tr><td><input class = 'cage' type='text' required = 'true' placeholder = 'ලිපිනය' ></td>
				
				</tr>
				
				
				
				
				
			
				
			
			</table>		
		
		</form>

</body>