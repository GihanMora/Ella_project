<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href='gasthu.css'>
</head>
<body class='body'>
<div class='head'>
	logged in as:
	
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-ගාස්තු අයකිරීම</h2>
	<h4 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-කඩකුලී අයකිරීම</h4>
	
		
<nav><ul>
        <li><a href="manjula.php">ප්‍රධාන පිටුව</a></li>
        <li>
            <a href="kadakuli.php">කඩකුලී</a>
            <ul>
                <li><a href="kadakuli.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="kadakulitable.php">කඩකුලී  ගිණුම් විස්තර</a></li>
				<li><a href="shop_info.php">කඩකුලී ලියාපදිංචි ලේඛණය.</a></li>
				
            </ul>
        </li>
		<li>
            <a href="sathipola.php">සතිපොළ</a>
            <ul>
                <li><a href="sathipola.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="sathipolatable.php">සතිපොළ  ගිණුම් විස්තර</a></li>
				
				
            </ul>
        </li>
		<li>
            <a href="rawanaellawasi.php">රාවණා ඇල්ල-වැසිකිලි</a>
            <ul>
                <li><a href="rawanaellawasi.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="rawanawasikilitable.php">රාවණා ඇල්ල-වැසිකිලි  ගිණුම් විස්තර</a></li>
				
            </ul>
        </li>
        <li><a href="rawanaella.php">රාවණා ඇල්ල-නැරඹුම් මැදිරිය</a>
		<ul>
                <li><a href="rawanaella.php">නව යොමුවක් ඇතුලත් කිරීම</a></li>
                <li><a href="rawananarabumtable.php">නැරඹුම් මැදිරිය  ගිණුම් විස්තර</a></li>
				
            </ul>
		
		</li>
    </ul>
</nav></div>

	<form id='ttt' action='kadakulitablefull.php' method='post'>
			<tr><h4 >සොයන්න  Search Here!</h4>
				<td style="position:relative;"  width='250px'>
				
				<select name='yr'>
					<option value="1"></option>
					<option value="2012">2012</option>
					<option value="2013">2013</option>
					<option value="2014">2014</option>
					<option value="2015">2015</option>
					<option value="2016">2016</option>
					<option value="2017">2017</option>
					<option value="2018">2018</option>
					<option value="2019">2019</option>
					<option value="2020">2020</option>
					<option value="2021">2021</option>
					<option value="2022">2022</option>
				</select>
				
				</td></tr><input type='submit' name='set' value='සොයන්න'>
			</form>
<div id='pp'>
	<?php
$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
if($link->connect_error){
	die("Error:Could not connect.".$link->connect_error());
	
}
if(isset($_POST['set'])){
$yrs=$_POST['yr'];
		$query = "SELECT ankaya,regno,nama,address,owner,estimated,
year,masaya,jan,feb,mar,april,may,june,july,aug,sep,oct,nov,december, 
COALESCE(jan,0) + COALESCE(feb,0) + COALESCE(mar,0) + COALESCE(april,0) + COALESCE(may,0)+ COALESCE(june,0)+ COALESCE(july,0)+ COALESCE(sep,0)+ COALESCE(oct,0)+ COALESCE(nov,0)+ COALESCE(december,0) AS 'Total' FROM kadakulifull where year='$yrs'"; 
 
$result = mysqli_query($link,$query);  
 //$result1 = mysqli_query($link,$qq); 
//$row1 = mysqli_fetch_array($result1);
echo "<table>"; // start a table tag in the HTML
$terms=array("අංකය","ලියාපදිංචි  අංකය","නම "," ලිපිනය","කඩහිමියාගේ නම","තක්සේරු මුදල","අවුරුද්ද","මාසය","ජනවාරි","පෙබරවාරි", "මාර්තු"," අප්‍රේල්"," මැයි","  ජූනි"," ජූලි"," අගෝස්තු"," සැප්තැම්බර්" ,"ඔක්තෝම්බර්" ,"නොවැම්බර් ","දෙසැම්බර්","එකතුව","ඉදිරියට ගෙන ආ ශේෂය");
   

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


	

echo "<tr><td align='center' colspan='24'>".'<a href="kadakulitable.php" target="_self"  style="text-decoration:none;" ><input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට"></a>'."</td></tr>";

echo "</table>"; //Close the table in HTML

}

else{				$query = "SELECT ankaya,regno,nama,address,owner,estimated,
				year,masaya,jan,feb,mar,april,may,june,july,aug,sep,oct,nov,december, 
				COALESCE(jan,0) + COALESCE(feb,0) + COALESCE(mar,0) + COALESCE(april,0) + COALESCE(may,0)+ COALESCE(june,0)+ COALESCE(july,0)+ COALESCE(sep,0)+ COALESCE(oct,0)+ COALESCE(nov,0)+ COALESCE(december,0) AS 'Total' FROM kadakulifull"; 
				 
				$result = mysqli_query($link,$query);  
				 //$result1 = mysqli_query($link,$qq); 
				//$row1 = mysqli_fetch_array($result1);
				echo "<table id='tables'>"; // start a table tag in the HTML
				$terms=array("අංකය","ලියාපදිංචි  අංකය","නම "," ලිපිනය","කඩහිමියාගේ නම","තක්සේරු මුදල","අවුරුද්ද","මාසය","ජනවාරි","පෙබරවාරි", "මාර්තු"," අප්‍රේල්"," මැයි","  ජූනි"," ජූලි"," අගෝස්තු"," සැප්තැම්බර්" ,"ඔක්තෝම්බර්" ,"නොවැම්බර් ","දෙසැම්බර්","එකතුව","ඉදිරියට ගෙන ආ ශේෂය");
				   

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


					

				echo "<tr><td align='center' colspan='24'>".'<a href="kadakulitable.php" target="_self"  style="text-decoration:none;" ><input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට"></a>'."</td></tr>";

				echo "</table>"; //Close the table in HTML
}
mysqli_close($link);
?>
</div>

</body>
</html>