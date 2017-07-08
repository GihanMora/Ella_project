<html>
<head><title>රාවණා ඇල්ල  වැසිකිළි  ගාස්තු</title>
	<link rel="stylesheet" type="text/css" href='gasthu.css'>
</head>
<body class='body'>
	<div class='head'>
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
</nav>
	</div>
	<?php
		$connection=mysqli_connect("localhost","Gihan_Gamage","Gihan1@uom","ella-project");
		if($connection->connect_error){
			die("Error:Could not connect.".$connection->connect_error());
		}
		
	?>
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
	<a href="rawanawasikilitable.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='ගිණුම් විස්තර පිරික්සීම.'></a>

	</div>
	<div id='form'>
	<form action='rawanaellawasi.php' method='post' >
		
			<table class='table'>
			
			<tr><td align='center'><b>රාවණා ඇල්ල-වැසිකිළි  ගාස්තු ඇතුලත් කිරීම</b></td></tr>
				<tr><td>දිනය :<input type='text' required='true' name='yr' placeholder='අවුරුද්ද'></td></tr>
				<tr>
				<td style="position:relative;left:0px;" width='250px'><select name='Month'>
<option value="January">January</option>
<option value="February">February</option>
<option value="March">March</option>
<option value="April">April</option>
<option value="May">May</option>
<option value="June">June</option>
<option value="July">July</option>
<option value="August">August</option>
<option value="September">September</option>
<option value="October">October</option>
<option value="November">November</option>
<option value="December">December</option>
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
</select></td></tr>
				<tr><td>ගාස්තුව:<input type='text' name='payment' required='true' placeholder='ගාස්තුව'></td></tr>
				<tr><td><input class='b2' type='submit' name='enter' value='ඇතුලත් කරන්න' required='true'></td></tr>
			</table>
			<a href="manjula.php" target="_self"  style="text-decoration:none;" target="_self"><input class='b1' type='button' name='regbutton' value='පෙර මෙනුවට'></a>
		
	</form>
	</div>
	
	</div>
	<?php
		
		if(isset($_POST['enter'])){
			$year=$_POST['yr'];
			$month=$_POST['Month'];
			$day=$_POST['day'];
			$payment=$_POST['payment'];
			$columns=array('jan','feb','mar','april','may','june','july','aug','sep','oct','nov','december');
			$mons=array('January','February','March','April','May','June','July','August','September','October','November','December');
			for($i=0;$i<12;$i++){
				if($month==$mons[$i]){
					$mon=$columns[$i];
					break;
				}
			}
			$date="$year-$month-$day";
			$q="SELECT sum(adhi)-sum(higa) FROM rawanawasikili";
			$ex2=mysqli_query($connection, $q);
			$res=mysqli_fetch_array($ex2);
			$fbb=$res[0];
			$ssn=array('April','August','December');
			if(in_array($month,$ssn)){
				$toPay=6000.00;
				$amount=6000.00;
			}
			else{
				
				$toPay=5000.00;
				$amount=5000.00;
			}
			if($payment>$amount){
				$adhi=$payment-$amount;
				$fbb=$fbb+$adhi;
				$insert3="INSERT INTO rawanawasikili(date,masaya,masikaMudala,geviyaYuthuMudala,geweema,adhi,sub_date,sub_time) VALUES('$date','$month',$amount,'$fbb','$payment','$adhi',CURDATE(),CURTIME())";
			}
			if($payment<$amount){
				$higa=$amount-$payment;
				$fbb=$fbb-$higa;
				$insert3="INSERT INTO rawanawasikili(date,masaya,masikaMudala,geviyaYuthuMudala,geweema,higa,sub_date,sub_time) VALUES('$date','$month',$amount,'$fbb','$payment','$higa',CURDATE(),CURTIME())";
			}
			if(mysqli_query($connection, $insert3)){
				echo "<script>alert('රාවණා ඇල්ල-වැසිකිළි  ගාස්තු යාවත්කාලීන කරන ලදී.')</script>";
	
			}
			else{
				echo "ERROR: Could not able to execute $insert3. " . mysqli_error($connection);
			}
		}

	?>
</body>
</html>