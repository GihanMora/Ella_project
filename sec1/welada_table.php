<html>
<head><title>වාර්තාව</title>
	<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
	<div class='head1'>
	logged in as:
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<h4 align='center'>-වෙළඳ බලපත්‍ර-වාර්තාව</h4>
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
	<div id='tab2' style="display:block;" >
		<form action='welada_table.php' method='post'>
			<h4 lign='center'>සොයන්න  Search Here!</h4>
			<tr><td>දිනය :<input type='number' value='2017' required='true' name='yr' placeholder='අවුරුද්ද'></td></tr>
				<td style="position:relative;left:0px;" width='250px'>
				<select name='Month'>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>
				</select>
				<select name='day'>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
					<option value="10">10</option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
					<option value="26">26</option>
					<option value="27">27</option>
					<option value="28">28</option>
					<option value="29">29</option>
					<option value="30">30</option>
					<option value="31">31</option>
				</select>
				</td></tr><input class='b2' type='submit' name='set' value='සොයන්න'>
			</form></div>
			
			
			<div id='tb'>
	
		<?php
			$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
			if($link->connect_error){
				die("Error:Could not connect.".$link->connect_error());
			}
			if(isset($_POST['set'])){
				
				$yrs=$_POST['yr'];
				$mas=$_POST['Month'];
				$dys=$_POST['day'];
				$fd="$yrs-$mas-$dys";
				$select1= "SELECT ankaya,balapathra_ankaya,nama,address,ekathuwa,masaya,sub_date,sub_time FROM balapathra_welada_short where sub_date='$fd'"; 
				$dets1 = mysqli_query($link,$select1);
				$check1=$dets1;
				echo "<table id='tables'>"; // start a table tag in the HTML
				echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>බලපත්‍ර අංකය</td>
			<td class='cages'>නම </td>
			<td class='cages'>ලිපිනය</td>
			<td class='cages'>එකතුව</td>
			<td class='cages'>මාසය</td>
			<td class='cages'>ඇතුළත් කළ දිනය</td>
			<td class='cages'>ඇතුළත් කළ වේලාව</td>
				</tr>";
			while($row = mysqli_fetch_array($dets1)){   //fetches a row as an associatinve array
				echo "<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				<td>" . $row[4] . "</td>
				<td>" . $row[5] . "</td>
				<td>" . $row[6] . "</td>
				<td>" . $row[7] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; 
			}
			
		elseif(isset($_POST['search'])){
			$nm=$_POST['sb'];
			$select="select ankaya,balapathra_ankaya,nama,address,ekathuwa,masaya,sub_date,sub_time from balapathra_welada_short where nama like'%$nm%'";
			$dets = mysqli_query($link,$select);
			$check=$dets;
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>බලපත්‍ර අංකය</td>
			<td class='cages'>නම </td>
			<td class='cages'>ලිපිනය</td>
			<td class='cages'>එකතුව</td>
			<td class='cages'>මාසය</td>
			<td class='cages'>ඇතුළත් කළ දිනය</td>
			<td class='cages'>ඇතුළත් කළ වේලාව</td>
				</tr>";
			while($row = mysqli_fetch_array($dets)){   //fetches a row as an associatinve array
				echo "<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				<td>" . $row[4] . "</td>
				<td>" . $row[5] . "</td>
				<td>" . $row[6] . "</td>
				<td>" . $row[7] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; //Close the table in HTM
	}else{
			$query = "SELECT ankaya,balapathra_ankaya,nama,address,ekathuwa,masaya,sub_date,sub_time FROM balapathra_welada_short"; 
			$result = mysqli_query($link,$query);  
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>බලපත්‍ර අංකය</td>
			<td class='cages'>නම </td>
			<td class='cages'>ලිපිනය</td>
			<td class='cages'>එකතුව</td>
			<td class='cages'>මාසය</td>
			<td class='cages'>ඇතුළත් කළ දිනය</td>
			<td class='cages'>ඇතුළත් කළ වේලාව</td>
				</tr>";
			while($row = mysqli_fetch_array($result)){   //fetches a row as an associatinve array
				echo "<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				<td>" . $row[4] . "</td>
				<td>" . $row[5] . "</td>
				<td>" . $row[6] . "</td>
				<td>" . $row[7] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; //Close the table in HTML

	
	}

	mysqli_close($link);
	?>

	</div>
	
	<div id='search11'>
		<form action='welada_table.php' method='post'>
			<h4 align='center'>සොයන්න  Search Here!</h4>
			<input align='center' class='searchbox' type='text' name='sb' placeholder='name'>
			<input class='b2' type='submit' name='search' value='සොයන්න' required='true'>
			<h4 align='center'>ගිණුම් විස්තර</h4>
		</form>
		<table align='center'>
		<tr>
		<td align='center' colspan='2'>
		<a href="welada_table2.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="විස්තාරණය කරන්න.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="welada_table.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="මුද්‍රණය කරන්න.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="balapathra_gasthu-welada.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව ඇතුළත් කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='2'>
		<a href="balapathra_gasthu.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට">
		</a>
		</td>
		</tr></table>
	</div>
	
</body>
</html>