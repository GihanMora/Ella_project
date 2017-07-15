<html>
<head><title>ලියාපදිංචි ලේඛණය</title>
	<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
	<div class='head1'>
	logged in as:
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<h4 align='center'>බලපත්‍ර ලියාපදිංචි ලේඛණය.</h4>
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
	<div id='tbbb' style="display:block;" >
		<?php
			$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
			if($link->connect_error){
				die("Error:Could not connect.".$link->connect_error());
			}
			

			$query = "SELECT enty,name,address,balapathra_ankaya,wargaya FROM people_info"; 
			$result1 = mysqli_query($link,$query);  
			
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>නම </td>
			<td class='cages'>ලිපිනය</td>
			<td class='cages'>බලපත්‍ර අංකය</td>
			<td class='cages'>බලපත්‍ර වර්ගය</td></tr>";
			while($row = mysqli_fetch_array($result1)){   //fetches a row as an associatinve array
				echo "<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				<td>" . $row[4] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; //Close the table in HTML


	if(isset($_POST['search'])){
		$nm=$_POST['sb'];
		$select="select enty,name,address,balapathra_ankaya,wargaya from people_info where name like'%$nm%'";
		$dets = mysqli_query($link,$select);
		$check=$dets;
	}
	
	

	mysqli_close($link);
	?>

	</div>
	
	<div id='sid'>
		
		<h4 align='center'>ගිණුම් විස්තර</h4>
		<table align='center'>
		<tr>
		<td align='center' colspan='1'>
		<a href="balapathra_gasthu-wyapara.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව ව්‍යාපාර ලියාපදිංචි  කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="balapathra_gasthu-welada.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව කර්මාන්ත ලියාපදිංචි  කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="balapathra_gasthu-karmantha.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව වෙළඳ ලියාපදිංචි  කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='2'>
		<a href="balapathra_gasthu.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="ප්‍රධාන පිටුව">
		</a>
		</td>
		</tr></table>
	</div>
	<div id='tab2' style="display:block;" >
	<?php
		if(isset($_POST['search'])){
			
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "Filtered Results:";
			echo "<tr><td class='cages'>අංකය</td><td class='cages'>නම </td><td class='cages'>ලිපිනය</td><td class='cages'>බලපත්‍ර අංකය</td><td class='cages'>බලපත්‍ර වර්ගය</td></tr>";
			while($res = mysqli_fetch_array($dets)){   //fetches a row as an associatinve array
				echo "<tr><td>" . $res[0] ."</td><td>" . $res[1] . "</td><td>" . $res[2] . "</td><td>" . $res[3] . "</td><td>" . $res[4] . "</td></tr>";  //$row['index'] the index here is a field name
			}
			
			
			
			echo "</table>";

		}
	?>

	</div>
</body>
</html>