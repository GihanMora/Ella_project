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

<html>
	<head>
		<title>Ella Pradeshiya Sabawa/Jala Sapayum</title>
		<link href = "jala_sapayum.css" type = "text/css" rel = "stylesheet">
	
	</head>
	
	<body>
		<h1>ජල සැපයුම- මුදල් ගෙවීම</h1>
		<div class = "container">
		<ul>
		<li><a href='Jala_Sapayum_meter_reading.php' target="_self" class="button">මීටර කියවුම් ඇති බිල් පතකි</a></li>
		<li><a href ='Jala_Sapayum_sthawara_gasthu.php' target="_self" class="button">ස්තාවර ගාස්තු ඇති බිල් පතකි</a></li>
		<li><a href ='datainsert.php' target="_self" class="button">නව පාරිබෝගිකයෙකු ලියාපදිoචි කිරීම</a></li>
	
		</ul>
		</div>

		
		
	</body>


</html>