<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
<div class='head'>
logged in as:
<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
<h4 align='center'>-බලපත්‍ර ගාස්තු-වෙළඳ බලපත්‍ර</h4>
	<nav><ul>
        <li><a href="balapathra_gasthu.php">ප්‍රධාන පිටුව</a></li>
        <li>
            <a href="balapathra_gasthu-wyapara.php">ව්‍යාපාර බලපත්‍ර</a>
            <ul>
                <li><a href="balapathra_gasthu-wyapara.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="wyapara_table.php">ව්‍යාපාර බලපත්‍ර  ගිණුම් විස්තර</a></li>
				<li><a href="balapathra_info.php">ව්‍යාපාර බලපත්‍ර ලියාපදිංචි ලේඛණය.</a></li>
				
            </ul>
        </li>
		<li>
            <a href="balapathra_gasthu-karmantha.php">කර්මාන්ත බලපත්‍ර</a>
            <ul>
                <li><a href="balapathra_gasthu-karmantha.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="karmantha_table.php">කර්මාන්ත බලපත්‍ර  ගිණුම් විස්තර</a></li>
				<li><a href="balapathra_info.php">කර්මාන්ත බලපත්‍ර ලියාපදිංචි ලේඛණය.</a></li>
				
				
            </ul>
        </li>
		<li>
            <a href="balapathra_gasthu-welada.php">වෙළඳ බලපත්‍ර</a>
            <ul>
                <li><a href="balapathra_gasthu-welada.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="welada_table.php">වෙළඳ බලපත්‍ර  ගිණුම් විස්තර</a></li>
				<li><a href="balapathra_info.php">වෙළඳ බලපත්‍ර ලියාපදිංචි ලේඛණය.</a></li>
				
            </ul>
        </li>
    </ul>
</nav></div></div>
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
$query = "SELECT ankaya,balapathra_ankaya,nama,address,idiri_ge_she,warshika_gasthuwa,
year,jan,feb,mar,april,may,june,july,aug,sep,oct,nov,december, 
COALESCE(jan,0) + COALESCE(feb,0) + COALESCE(mar,0) + COALESCE(april,0) + COALESCE(may,0)+ COALESCE(june,0)+ COALESCE(july,0)+ COALESCE(sep,0)+ COALESCE(oct,0)+ COALESCE(nov,0)+ COALESCE(december,0) AS 'Total',idiri_genaa_sheshaya FROM balapathra_welada"; 
 
$result = mysqli_query($link,$query);  
 
echo "<table id='tables'>"; // start a table tag in the HTML
$terms=array("අංකය","බලපත්‍ර අංකය","නම "," ලිපිනය","ඉදිරියට ගෙන ආ ශේෂය","වාර්ෂික ගාස්තුව","අවුරුද්ද","ජනවාරි","පෙබරවාරි", "මාර්තු"," අප්‍රේල්"," මැයි","  ජූනි"," ජූලි"," අගෝස්තු"," සැප්තැම්බර්" ,"ඔක්තෝම්බර්" ,"නොවැම්බර් ","දෙසැම්බර්","එකතුව","ඉදිරියට ගෙන ආ ශේෂය");
   

echo"<tr>";
foreach($terms as $value){
		echo "<td class='cages'>".$value."</td>";
	
	
	}
	
	echo "</tr>";
	
	while($row = mysqli_fetch_array($result)  ){   //fetches a row as an associatinve array

echo"<tr>";
for($k=0; $k<21; $k++){
	
	
	
		echo "<td>".$row[$k]."</td>";
	
	
	}
	echo "</tr>";
	
}


	

echo "<tr><td align='center' colspan='24'>".'<a href="welada_table.php" target="_self"  style="text-decoration:none;" ><input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට"></a>'."</td></tr>";

echo "</table>"; //Close the table in HTML

mysqli_close($link);
?>
</div>

</body>
</html>