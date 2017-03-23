<html>
<head><title>බලපත්‍ර ගාස්තු</title>
	<link rel="stylesheet" type="text/css" href='balapathra.css'>
</head>
<body class='body'>
	<div class='head'>
	logged in as:
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<h4 align="center">බලපත්‍ර ගාස්තු-කර්මාන්ත බලපත්‍ර</h4>
		<ul align='center'>
   <li><a href="balapathra_gasthu.php">ප්‍රධාන පිටුව</a></li>
  <li><a href="balapathra_gasthu-wyapara.php">ව්‍යාපාර බලපත්‍ර</a></li>
  <li><a href="balapathra_gasthu-karmantha.php">කර්මාන්ත බලපත්‍ර</a></li>
  <li><a href="balapathra_gasthu-welada.php">වෙළඳ බලපත්‍ර</a></li>

</ul>
	</div>
	<?php
		$connection=mysqli_connect("localhost","Gihan_Gamage","Gihan1@uom","ella-project");
		if($connection->connect_error){
			die("Error:Could not connect.".$connection->connect_error());
		}
		else{
			
			echo "<script>alert('connected successfully')</script>";
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
	<a href="wyapara_table.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='ගිණුම් විස්තර පිරික්සීම.'></a>

	</div>
	<div id='form'>
	<form action='balapathra_gasthu-karmantha.php' method='post' >
		
			<table class='table'>
				<tr><td>නම:<input type='text' required='true' name='kname' placeholder='නම'></td></tr>
				<tr><td>ලිපිනය:<input type='text' required='true' name='kaddress' placeholder='ලිපිනය'></td></tr>
				<tr><td>බලපත්‍ර අංකය:<input type='text' required='true' name='knum' placeholder='බලපත්‍ර අංකය'></td></tr>
				<tr><td>මාසය:<select name='kMonth'>       
					<option value="January">ජනවාරි</option>
					<option value="February">පෙබරවාරි</option>
					<option value="March">මාර්තු</option>
					<option value="April">අප්‍රේල්</option>
					<option value="May">මැයි</option>
					<option value="June">ජූනි</option>
					<option value="July">ජූලි</option>
					<option value="August">අගෝස්තු</option>
					<option value="September">සැප්තැම්බර්</option>
					<option value="October">ඔක්තෝම්බර්</option>
					<option value="November">නොවැම්බර්</option>
					<option value="December">දෙසැම්බර්</option>
					</select></td></tr>
				<tr><td>ගාස්තුව:<input type='text' name='kpayment' required='true' placeholder='ගාස්තුව'></td></tr>
				<tr><td><input class='b2' type='submit' name='kenter1' value='ඇතුලත් කරන්න' required='true'></td></tr>
			</table>
			<a href="balapathra_gasthu.php" target="_self"  style="text-decoration:none;" target="_self"><input class='b1' type='button' name='regbutton' value='පෙර මෙනුවට'></a>
		
	</form>
	</div>
	<div id='form'>
		<form action='balapathra_gasthu-karmantha.php' method='post'>
			<table class='table'>
				<tr><td>නම:<input type='text' required='true'  name='name1' placeholder='නම'></td></tr>
				
				<tr><td>ලිපිනය:<input type='text' required='true' name='address1' placeholder='ලිපිනය'></td></tr>
				<tr><td>බලපත්‍ර අංකය:<input type='text' required='true' name='num1' placeholder='බලපත්‍ර අංකය'></td></tr>
				<tr><td><input class='b2' type='submit' name='register' value='ලියාපදිංචි කරන්න.' required='true'></td></tr>
			</table>
		</form>
	</div>
	</div>
	<?php
		if(isset($_POST['register'])){
			$name1=$_POST['name1' ];
			$address1=$_POST['address1'];
			$num1=$_POST['num1'];
			$insert_ppl="INSERT INTO people_info(name,address,balapathra_ankaya) VALUES('$name1','$address1',$num1)";
			
			if(mysqli_query($connection, $insert_ppl)){
				echo "<script>alert('Person registered successfully')</script>";
	
			}
			else{
				echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
			}
		}
		if(isset($_POST['kenter1'])){
			
			$kname=$_POST['kname'];
			$kaddres=$_POST['kaddress'];
			$knum=$_POST['knum'];
			$kmonth=$_POST['kMonth'];
			$kpayment=$_POST['kpayment'];
			$kcolumns=array('jan','feb','mar','april','may','june','july','aug','sep','oct','nov','december');
			$kmons=array('January','February','March','April','May','June','July','August','September','October','November','December');
			for($i=0;$i<12;$i++){
				if($kmonth==$kmons[$i]){
					$kmon=$kcolumns[$i];
					break;
				}
			}
			$ck1="select ankaya from balapathra_karmantha WHERE nama='$kname'";
			$rr1=mysqli_query($connection, $ck1);
			if($w = mysqli_fetch_array($rr1)){
				echo "<script>alert('connected successfully')</script>";
				echo "Update entry";
				$insert="UPDATE balapathra_karmantha SET $kmon='$kpayment' WHERE nama='$kname'";
			}
			else{
				echo "<script>alert('new one successfully')</script>";
				echo "new enty";
				$insert="INSERT INTO balapathra_karmantha(nama,address,balapathra_ankaya,ekathuwa,masaya,$kmon) VALUES('$kname','$kaddres',$knum,'$kpayment','$kmonth','$kpayment')";
			}
			$insert3="INSERT INTO balapathra_karmantha_short(nama,address,balapathra_ankaya,ekathuwa,masaya) VALUES('$kname','$kaddres',$knum,'$kpayment','$kmonth')";
			if(mysqli_query($connection, $insert)&&mysqli_query($connection, $insert3)){
				echo "<script>alert('Records inserted successfully')</script>";
	
			}
			else{
				echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
			}
		}

	?>
</body>
</html>