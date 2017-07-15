<html>
<head>
<title>
බලපත්‍ර ගාස්තු
</title>
<link rel="stylesheet" type="text/css" href='balapathra.css'>
</head>
<body class='body' >

<div class='head1'>
logged in as:
<h2 align='center'>ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
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
	
	<a href="balapathra_info.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='බලපත්‍ර ලියාපදිංචි ලේඛණය.'></a>

	</div>
<div id='select'>
<table align='center'>
<tr><td class='but' colspan='3'>
<h3 align='center'>නව යොමුවක් ඇතුලත් කිරීම.</h3>
</td></tr>
<tr><td class='but'>
<a href="balapathra_gasthu-wyapara.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ව්‍යාපාර බලපත්‍ර'></a>
</td><td class='but'>
<a href="balapathra_gasthu-karmantha.php" target="_self"   style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='කර්මාන්ත බලපත්‍ර'></a>
</td><td class='but'>
<a href="balapathra_gasthu-welada.php" target="_self"   style="text-decoration:none;" target="_blank"><input class='but1' type='button' name='regbutton' value='වෙළඳ බලපත්‍ර'></a>
</td></tr>
<tr><td class='but' colspan='3'><h3 align='center'>ගිණුම් විස්තර පිරික්සීම.</h3></td></tr>
<tr><td class='but'>

<a href="wyapara_table.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button'  class='but1' name='regbutton' value='ව්‍යාපාර බලපත්‍ර'></a>
</td><td class='but'>
<a href="karmantha_table.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1'  name='regbutton' value='කර්මාන්ත බලපත්‍ර'></a>
</td><td class='but'>
<a href="welada_table.php" target="_self"   style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='වෙළඳ බලපත්‍ර'></a>
</td></tr>
</table>
</div>
</body>

</html>