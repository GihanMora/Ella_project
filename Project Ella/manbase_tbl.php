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
	<title>man base table</title>
	<link href = "manbase_tbl.css" type = "text/css" rel = "stylesheet">
</head>
<body>
	<ul>
		<li><a = href="Jala_Sapayum.php" target="_self">ප්‍රදාන මෙනුව</a></li>
	</ul>

</body>
<?php
	$month = Date('m');
	$que = "SELECT * FROM calculation_log";
	$res = mysqli_query($connection,$que);
	if($res){
		echo "res";
	}

	
	echo "<table>"; 
echo "<tr>
<th><h3>ගිණුම් අංකය</h3></th>
<th><h3>මුලු එකතුව</h3></th>
<th><h3>ජනවාරි</h3></th>
<th><h3>පෙබරවාරි</h3></th>
<th><h3>මාර්තු</h3></th>
<th><h3>අප්‍රේල්</h3></th>
<th><h3>මැයි</h3></th>
<th><h3>ජුනි</h3></th>
<th><h3>ජූලි</h3></th>
<th><h3>අගොස්තු</h3></th>
<th><h3>සෙප්තෑම්බර්</h3></th>
<th><h3>ඔක්තොම්බර්</h3></th>
<th><h3>නොවෑම්බර්</h3></th>
<th><h3>දෙසෑම්බර්</h3></th>
</tr>";
	while($row=mysqli_fetch_array($res)){ 
	echo "correct";
	$total = $row['jan']+$row['feb']+$row['mar']+$row['apr']+$row['may']+$row['jun']+$row['jul']+$row['aug']+$row['sep']+$row['oct']+$row['nov']+$row['dece'];
echo "<tr><td>" . $row['id'] . "</td><td>" .$row['total']. "</td><td>" . $row['jan'] . "</td><td>".$row['feb']."</td><td>" .$row['mar']."</td>". "</td><td>".$row['apr']. "</td><td>".$row['may']."</td><td>".$row['jun']."</td><td>".$row['jul']."</td><td>".$row['aug']."</td><td>".$row['sep']."</td><td>".$row['oct']."</td><td>".$row['nov']."</td><td>".$row['dece']."</td></tr>";
	$total=0;
}

echo "</table>";
	
	

    

	
	

?>