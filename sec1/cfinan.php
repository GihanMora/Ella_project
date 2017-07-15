<html>
<head><title>තහවුරු කිරීම</title>
	<link rel="stylesheet" type="text/css" href='tablestyles.css'>
</head>
<body class='body'>
	<div class='head1'>
	logged in as:
	<h2 style="color:White;" align='center'>ඇල්ල ප්‍රාදේශීය සභාව</h2>
	<h4 style="color:White;" align='center'>ප්‍රධාන මූල්‍ය කළමණාකරු</h4>
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
	<div id='side'>
	<div  id="timeNow1">
	<?php
	date_default_timezone_set("Asia/Colombo");
	echo date("h:i");
	?>
	</div>
	<div id="timeNow" >
    </div>
	
    <script>
        (function timev(){
            var d = new Date();
            
            var clientTime =d.getSeconds();
            //alert(clientTime);
            document.getElementById("timeNow").innerHTML = clientTime;
            setTimeout(timev, 1000); // refresh time every 1 second
        })();
    </script>
	
	<div id='calender'>
	<?php
	echo "<p align='center' class='y'>" . date("Y") . "</p>";
	echo " <p align='center' class='m'>" . date("F") . "</p>
	<p align='center' class='d'><b>". date("d") . "</b></p>
	<p align='center' class='d1'>". date("l") . "</p>";
	?>
	</div>
	<a href="wyapara_table.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='ගිණුම් විස්තර පිරික්සීම.'></a>
	<a href="balapathra_info.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='බලපත්‍ර ලියාපදිංචි ලේඛණය.'></a>

	</div>
	<div id='t2' style="display:block;" >
		
	
		<?php
		$btn="<form action='cfinan.php' method='post'>
			<input class='qq' type='submit' name='approve' value='තහවුරු කරන්න' required='true'>
		</form>"?>
		
		<?php
			$link =new mysqli('localhost','root','Gihan1@uom','ella-project');
			if($link->connect_error){
				die("Error:Could not connect.".$link->connect_error());
			}
			
			$query = "SELECT ankaya,vistharaya,geweema,Approved,wargaya FROM prasa_two where Approved='false'"; 
			$result = mysqli_query($link,$query);  
			echo "<div id='bck'><h2 align='center'>Notification Panel</h2>";
			if($row = mysqli_fetch_array($result)){
				
			echo "<div id='noti'><table >"; // start a table tag in the HTML
			echo "<tr>
			<td class='cages'>අංකය</td>
			<td class='cages'>විස්තරය</td
			<td class='cages'></td>
			<td class='cages'>වර්ගය </td>
			<td class='cages'>ගාස්තුව</td>
			<td class='cages'>තහවුරු කිරීම</td>
				</tr>
				<tr>
				<td>" . $row[0] ."</td>
				<td>" . $row[1] . "</td>
				<td>" . $row[4] . "</td>
				<td>" . $row[2] . "</td>
				<td>" . $row[3] . "</td>
				</tr>
				</table>";
				
				
					$idf=$row[0];
					
				if(isset($_POST['approve'])){
					$instk="UPDATE prasa_two SET Approved='true' where Approved='false' && ankaya='$idf'";
					$rt = mysqli_query($link,$instk);
					echo "<script>window.open('cfinan.php','_self')</script>";
					 }echo "$btn</div></div>";
					 
					
			}else{
				echo "<h3 align='center'>You Don't Have new Notifications!</h3>";
				
			}		
	  //$row['index'] the index here is a field name
				
			
			
						
			
						
			
		

			
		 //Close the table in HTML
	
		mysqli_close($link);
	?>

	</div>
	
	
</body>
</html>