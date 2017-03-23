<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
<div class='head'>
logged in as:
<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<ul align='center'>
   <li><a href="balapathra_gasthu.php">ප්‍රධාන පිටුව</a></li>
  <li><a href="balapathra_gasthu-wyapara.php">ව්‍යාපාර බලපත්‍ර</a></li>
  <li><a href="balapathra_gasthu-karmantha.php">කර්මාන්ත බලපත්‍ර</a></li>
  <li><a href="balapathra_gasthu-welada.php">වෙළඳ බලපත්‍ර</a></li>

</ul></div>
<div id='calender'>
	<?php
	echo "<p align='center' class='y'>" . date("Y") . "</p>";
	echo " <p align='center' class='m'>" . date("F") . "</p>
	<p align='center' class='d'><b>". date("d") . "</b></p>;
	<p align='center' class='d1'>". date("l") . "</p>";
	?>
	</div>
<div id='ext'>
	<?php
$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
if($link->connect_error){
	die("Error:Could not connect.".$link->connect_error());
	
}
$query = "SELECT ankaya,nama,address,balapathra_ankaya,idiri_ge_she,warshika_gasthuwa,
warshika_adhi_gasthuwa,ekathuwa,masaya,jan,feb,mar,april,may,june,july,aug,sep,oct,nov,december, 
COALESCE(jan,0) + COALESCE(feb,0) + COALESCE(mar,0) + COALESCE(april,0) + COALESCE(may,0)+ COALESCE(june,0)+ COALESCE(july,0)+ COALESCE(sep,0)+ COALESCE(oct,0)+ COALESCE(nov,0)+ COALESCE(december,0) AS 'Total',idiri_genaa_sheshaya FROM balapathra_wyapara"; 
 
$result = mysqli_query($link,$query);  
 //$result1 = mysqli_query($link,$qq); 
//$row1 = mysqli_fetch_array($result1);
echo "<table id='tables'>"; // start a table tag in the HTML
$terms=array("අංකය","නම "," ලිපිනය","බලපත්‍ර අංකය","ඉදිරියට ගෙන ආ ශේෂය","වාර්ෂික ගාස්තුව","වාර්ෂික අධි ගාස්තුව","එකතුව","ජනවාරි","පෙබරවාරි", "මාර්තු"," අප්‍රේල්"," මැයි","  ජූනි"," ජූලි"," අගෝස්තු"," සැප්තැම්බර්" ,"ඔක්තෝම්බර්" ,"නොවැම්බර් ","දෙසැම්බර්","එකතුව","ඉදිරියට ගෙන ආ ශේෂය");
   

echo"<tr>";
foreach($terms as $value){
		echo "<td class='cages'>".$value."</td>";
	
	
	}
	
	echo "</tr>";
	
	while($row = mysqli_fetch_array($result)  ){   //fetches a row as an associatinve array

echo"<tr>";
for($k=0; $k<23; $k++){
		if($k==8 ){
		continue;
	}
	
	
		echo "<td>".$row[$k]."</td>";
	
	
	}
	echo "</tr>";
	
}


	

echo "<tr><td align='center' colspan='24'>".'<a href="wyapara_table.php" target="_self"  style="text-decoration:none;" ><input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට"></a>'."</td></tr>";

echo "</table>"; //Close the table in HTML

mysqli_close($link);
?>
</div>

</body>
</html>