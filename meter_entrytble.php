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
	<title>viwe entry table</title>
	<link href = "meter_entrytble.css" type = "text/css" rel = "stylesheet">
</head>
<table>
</table>
<body>
<ul><li><a href="manbase_tbl.php" target="_self">විස්තාරනය කල වර්තාව</a><li>
<li><a = href="Jala_Sapayum.php" target="_self">ප්‍රදාන මෙනුව</a></li>
</ul>


</body>

<?php
$month = Date("m");
$query = "SELECT * FROM entrybase WHERE (month={$month})"; //You don't need a ; like you do in SQL
$result = mysqli_query($connection,$query);

echo "<table>"; 
echo "<tr>
<th><h3>ගිණුම් අංකය</h3></th>
<th><h3>ගෙවීම</h3></th>
<th><h3>මාසය</h3></th>
</tr>";


while($row=mysqli_fetch_array($result)){   //Creates a loop to loop through results
echo "<tr><td>" . $row['id'] . "</td><td>" . $row['payment'] . "</td><td>".$row['month']."</td></tr>";  //$row['index'] the index here is a field name
}

echo "</table>";




?>