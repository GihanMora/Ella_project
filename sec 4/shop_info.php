<html>
<head><title>කඩකුලී ලියාපදිංචි ලේඛණය</title>
	<link rel="stylesheet" type="text/css" href='gasthu.css'>
</head>
<body class='body'>
	<div class='head'>
	logged in as:
	
	<h2 align='center'>ඇල්ල ප්‍රාදේශීය සභාව-ගාස්තු අයකිරීම</h2>
	<h4 align='center'>කඩකුලී  ලියාපදිංචි ලේඛණය.</h4>
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
	
	
	<div id='tbbb' style="display:block;" >
		<?php
			$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
			if($link->connect_error){
				die("Error:Could not connect.".$link->connect_error());
			}
			

			$query = "SELECT ankaya,regno,nama,owner,est,address FROM shoplist"; 
			$result1 = mysqli_query($link,$query);  
			
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>ලියාපදිංචි අංකය</td>
			<td class='cages'>නම </td>
			<td class='cages'>කඩහිමියාගේ නම</td>
			<td class='cages'>තක්සේරු මුදල</td>
			<td class='cages'>ලිපිනය</td>
			
			</tr>";
			while($row = mysqli_fetch_array($result1)){   //fetches a row as an associatinve array
				echo "<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				<td>" . $row[4] . "</td>
				<td>" . $row[5] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; //Close the table in HTML


	if(isset($_POST['search'])){
		$nm=$_POST['sb'];
		$select="SELECT ankaya,regno,nama,owner,est,address FROM shoplist where nama like'%$nm%'";
		$dets = mysqli_query($link,$select);
		$check=$dets;
	}
	
	

	mysqli_close($link);
	?>

	</div>
	
	<div id='sika'>
		
		<h4 align='center'>ගිණුම් විස්තර</h4>
		<table align='center'>
		<tr>
		<td align='center' colspan='1'>
		<a href="kadakuli.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව ලියාපදිංචි  කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='2'>
		<a href="manjula.php" target="_self"  style="text-decoration:none;" >
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
			echo "<tr><td class='cages'>අංකය</td><td class='cages'>ලියාපදිංචි අංකය</td><td class='cages'>නම </td><td class='cages'>කඩහිමියාගේ නම</td><td class='cages'>තක්සේරු මුදල</td><td class='cages'>ලිපිනය</td></tr>";
			while($res = mysqli_fetch_array($dets)){   //fetches a row as an associatinve array
				echo "<tr><td>" . $res[0] ."</td><td>" . $res[1] . "</td><td>" . $res[2] . "</td><td>" . $res[3] . "</td><td>" . $res[4] . "</td><td>" . $res[5] . "</td></tr>";  //$row['index'] the index here is a field name
			}
			
			
			
			echo "</table>";

		}
	?>

	</div>
</body>
</html>