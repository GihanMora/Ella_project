<!DOCTYPE html>

<html>
	<head>
	<title> තෝරාගැනීම් </title>
	<link rel="stylesheet" href="StylesSelection.css"/>
	</head>
	<body>
	<!--
	<div id="tableContainer-1">
	<div id="tableContainer-2">
	<table align="center" width="400px" height="300px" id="myTable" border>
		<tr>
			
			<td align="center"><a href= "Back-hoeSelection.php">1-25 බැකෝ රථය කුලියට දීම </a></td>
		</tr>
		<tr>
		
			<td align="center"><a href= "TiperHome.php">1-25-1 ටිපර් රථය කුලියට දීම </a></td>
		</tr>
		<tr>
			
			<td align="center"><a href= "WaterBowserHome.php">4-43-1 ජල බවුසර් ගාස්තු</a></td>
		</tr>
	</div>
	</div>
		-->
		
		
		
	<div class='head'>
	<h1 align='center'>ඇල්ල ප්‍රාදේශීය සභාව  </h1>
	<ul align='center'>
	  <li><a href= "IdamSelection.php">ඉඩම් ලියාපදිංචි කිරීම </a></li>
	  <li><a href= "WahanaNawathumHome.php">වාහන නවතුම් පොළ </a></li>
	  <li><td align="center"><a href= "EllaWahanaNawathumHome.php">රාවණා ඇල්ල වාහන නැවතුම</a></li>

	</ul> 
	</div>
	
	
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
	
	
	<div id='select'>
<table align='center'>
<tr>
	<td class='but' colspan='3'>
	<h3 align='center'>රථවාහන කුලියට දීම </h3>
	</td>
</tr>
<tr>
	<td class='but'>
	<a href="IdamSelection.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ඉඩම් ලියාපදිංචි කිරීම'></a>
	</td>
	<td class='but'>
	<a href="WahanaNawathumHome.php" target="_self"   style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='වාහන නවතුම් පොළ'></a>
	</td>
	<td class='but'>
	<a href="EllaWahanaNawathumHome.php" target="_self"   style="text-decoration:none;" target="_blank"><input class='but1' type='button' name='regbutton' value='රාවණා ඇල්ල වාහන නැවතුම'></a>
	</td>
</tr>
</table>
</div>
	
	
	
	
	
	
	
	
	
	
	
		
		
		
			
	</body>
</html>