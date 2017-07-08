<html>
<head><title>වාර්තාව</title>
	<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
	<div class='head1'>
	logged in as:
	
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-ගාස්තු අයකිරීම</h2>
	<h4 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-රාවණා ඇල්ල  වැසිකිළි  ගාස්තු</h4>
	
		
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
	<div id='calender'>
	<?php
	echo "<p align='center' class='y'>" . date("Y") . "</p>";
	echo " <p align='center' class='m'>" . date("F") . "</p>
	<p align='center' class='d'><b>". date("d") . "</b></p>
	<p align='center' class='d1'>". date("l") . "</p>";
	?>
	</div>
	<div id='tab2' style="display:block;" >
		<form action='rawanawasikilitable.php' method='post'>
			<h4 align='center'>සොයන්න  Search Here!</h4>
			<tr><td>දිනය :<input type='text' required='true' name='yr' placeholder='අවුරුද්ද'></td>
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
			</form>
	
	<div id='tab2' style="display:block;" >
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
				$query1 = "SELECT ankaya,date,masaya,masikaMudala,geviyaYuthuMudala,geweema,adhi,higa,sub_date,sub_time FROM rawanawasikili where sub_date='$fd'"; 
				$result = mysqli_query($link,$query1);  
				echo "<table id='tables'>"; // start a table tag in the HTML
				echo "<tr class= 'tr'>
				<td class='cages'>අංකය</td>
				<td class='cages'>දිනය</td>
				<td class='cages'>මාසය</td>
				<td class='cages'>මාසික ගාස්තුව</td>
				<td class='cages'>ඉදිරියට ගෙනආ ශේෂය</td>
				<td class='cages'>ගෙවීම</td>
				<td class='cages'>අධි ගාස්තුව</td>
				<td class='cages'>හිඟ මුදල</td>
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
				<td>" . $row[8] . "</td>
				<td>" . $row[9] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


			echo "</table>"; //Close the table in HTML
			}
				
			else{
			$query = "SELECT ankaya,date,masaya,masikaMudala,geviyaYuthuMudala,geweema,adhi,higa,sub_date,sub_time FROM rawanawasikili"; 
			$result = mysqli_query($link,$query);  
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>දිනය</td>
			<td class='cages'>මාසය</td>
			<td class='cages'>මාසික ගාස්තුව</td>
			<td class='cages'>ඉදිරියට ගෙනආ ශේෂය</td>
			<td class='cages'>ගෙවීම</td>
			<td class='cages'>අධි ගාස්තුව</td>
			<td class='cages'>හිඟ මුදල</td>
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
				<td>" . $row[8] . "</td>
				<td>" . $row[9] . "</td>
					</tr>";  //$row['index'] the index here is a field name
			}
		


		echo "</table>"; //Close the table in HTML

			}
	if(isset($_POST['search'])){
		$nm=$_POST['sb'];
		$select="SELECT ankaya,date,masaya,masikaMudala,geviyaYuthuMudala,geweema,adhi,higa,sub_date,sub_time FROM rawanawasikili where date like'%$nm%'";
		$dets = mysqli_query($link,$select);
		$check=$dets;
	}
	
	

	mysqli_close($link);
	?>

	</div>
	
	<div id='search'>
		<form action='rawanawasikilitable.php' method='post'>
			<h4 align='center'>සොයන්න  Search Here!</h4>
			<input align='center' class='searchbox' type='text' name='sb' placeholder='name'>
			<input class='b2' type='submit' name='search' value='සොයන්න' required='true'>
			<h4 align='center'>ගිණුම් විස්තර වෙනස් කිරීම</h4>
		</form>
		<table align='center'>
		<tr>
		</tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="rawanawasikilitable.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="මුද්‍රණය කරන්න.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='1'>
		<a href="rawanaellawasi.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="නව ඇතුළත් කිරීමක්.">
		</a>
		</td></tr>
		<tr>
		<td align='center' colspan='2'>
		<a href="manjula.php" target="_self"  style="text-decoration:none;" >
		<input class="expand" type="button" name="regbutton" value="පෙර මෙනුවට">
		</a>
		</td>
		</tr></table>
	</div>
	<div id='tab2' style="display:block;" >
	<?php
		if(isset($_POST['search'])){
			
			echo "<table id='tables'>"; // start a table tag in the HTML
			echo "Filtered Results:";
			echo "<tr class= 'tr'>
			<td class='cages'>අංකය</td>
			<td class='cages'>දිනය</td>
			<td class='cages'>මාසය</td>
			<td class='cages'>මාසික ගාස්තුව</td>
			<td class='cages'>ඉදිරියට ගෙනආ ශේෂය</td>
			<td class='cages'>ගෙවීම</td>
			<td class='cages'>අධි ගාස්තුව</td>
			<td class='cages'>හිඟ මුදල</td>
				</tr>";
			while($res = mysqli_fetch_array($dets)){   //fetches a row as an associatinve array
				echo "<tr><td>" . $res[0] ."</td><td>" . $res[1] . "</td><td>" . $res[2] . "</td><td>" . $res[3] . "</td><td>" . $res[4] . "</td><td>" . $res[5] . "</td><td>" . $res[6] . "</td><td>" . $res[7] . "</td></tr>";  //$row['index'] the index here is a field name
			}
			
			
			
			echo "</table>";

		}
	?>

	</div>
</body>
</html>