<html>
<head><title>බලපත්‍ර ගාස්තු</title>
	<link rel="stylesheet" type="text/css" href='balapathra.css'>
</head>
<body class='body'>
	<div class='head1'>
	logged in as:
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<h4 align="center">බලපත්‍ර ගාස්තු-කර්මාන්ත බලපත්‍ර</h4>
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
	<?php
		$connection=mysqli_connect("localhost","Gihan_Gamage","Gihan1@uom","ella-project");
		if($connection->connect_error){
			die("Error:Could not connect.".$connection->connect_error());
		}
		else{
			
			//echo "<script>alert('connected successfully')</script>";
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
	<a href="karmantha_table.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='ගිණුම් විස්තර පිරික්සීම.'></a>
	<a href="balapathra_info.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='බලපත්‍ර ලියාපදිංචි ලේඛණය.'></a>

	</div>
	<div id='form'>
	<form action='balapathra_gasthu-karmantha.php' method='post' >
		
			<table class='table'>
			<tr><td align='center'><b>බලපත්‍ර ගාස්තු ඇතුලත් කිරීම - කර්මාන්ත බලපත්‍ර</b></td></tr>
				<tr><td>කර්මාන්ත බලපත්‍ර අංකය:<input type='text' required='true' name='knumb' placeholder='බලපත්‍ර අංකය'></td></tr>
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
			<tr><td align='center'><b>කර්මාන්ත බලපත්‍ර ලියාපදිංචි කිරීම </b></td></tr>
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
			$name1=mysqli_real_escape_string($connection,$_POST['name1' ]);
			$address1=mysqli_real_escape_string($connection,$_POST['address1']);
			$num1=mysqli_real_escape_string($connection,$_POST['num1']);
			$insert_ppl="INSERT INTO people_info(name,address,balapathra_ankaya,wargaya) VALUES('$name1','$address1',$num1,' කර්මාන්ත')";
			
			if(mysqli_query($connection, $insert_ppl)){
				echo "<script>alert('කර්මාන්ත බලපත්‍ර ගාස්තු සාර්ථකව ලියාපදිංචි  කරන ලදී. ')</script>";
	
			}
			else{
				if(mysqli_errno($connection)==1062){
					echo "<script>alert('බලපත්‍ර අංකය නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න')</script>";
				}
				
			}
		}
		if(isset($_POST['kenter1'])){
			
			$knumb= mysqli_real_escape_string($connection,$_POST['knumb']);
			$kmonth=mysqli_real_escape_string($connection,$_POST['kMonth']);
			$kpayment=mysqli_real_escape_string($connection,$_POST['kpayment']);
			if(is_numeric($kpayment)){
			$kcolumns=array('jan','feb','mar','april','may','june','july','aug','sep','oct','nov','december');
			$kmons=array('January','February','March','April','May','June','July','August','September','October','November','December');
			for($i=0;$i<12;$i++){
				if($kmonth==$kmons[$i]){
					$kmon=$kcolumns[$i];
					break;
				}
			}
			$yy=date('Y');
			$ck1="select nama from balapathra_karmantha WHERE balapathra_ankaya='$knumb' && year='$yy'";
			$rr1=mysqli_query($connection, $ck1);
			$isreg="select name from people_info WHERE balapathra_ankaya='$knumb'";
			$regq=mysqli_query($connection, $isreg);
			$addno="select address,name from people_info WHERE balapathra_ankaya='$knumb'";
			$addnoq=mysqli_query($connection, $addno);
			$addnores=mysqli_fetch_array($addnoq);
			$kaddres=$addnores[0];
			$kname=$addnores[1];
			$invalid=false;
			$info="බලපත්‍ර අංකය: ".$knumb."\n නම: ". $kname." \nලිපිනය: ".$kaddres."\nමාසය :".$kmonth;
			if($res = mysqli_fetch_array($regq)){
				if($w = mysqli_fetch_array($rr1)){
					$c2="select $kmon from balapathra_karmantha where balapathra_ankaya='$knumb' && year='$yy'";
					$ex=mysqli_query($connection, $c2);
					$res2=mysqli_fetch_array($ex);
					if($res2[0]==null){
					$insert3="INSERT INTO balapathra_karmantha_short(nama,address,balapathra_ankaya,ekathuwa,masaya,sub_date,sub_time) VALUES('$kname','$kaddres',$knumb,'$kpayment','$kmonth',CURDATE(),CURTIME())";
					$inoti="INSERT INTO prasa_two(vistharaya,geweema,Approved,wargaya) VALUES('$info','$kpayment','false',' කර්මාන්ත බලපත්‍ර')";
						
						
					$insert="UPDATE balapathra_karmantha SET $kmon='$kpayment' WHERE balapathra_ankaya='$knumb' && year='$yy'";
					$str=$w[0]." මහතා/මහත්මියගේ ගිණුම් තොරතුරු යාවත්කාලීන කරන ලදී.";
					}
					else{
						echo "<script>alert('මෙම මස ගාස්තු දැනටමත් ඇතුළත් කර ඇත. නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න.')</script>";
						$invalid=true;
					
					}
				}
				else{
					$str=$res[0]."  මහතා/මහත්මියගේ ගිණුම් තැබීම  $yy වර්ෂය සඳහා අරඹන කරන ලදී..";
					$insert="INSERT INTO balapathra_karmantha(nama,address,balapathra_ankaya,masaya,$kmon,year) VALUES('$kname','$kaddres',$knumb,'$kmonth','$kpayment',YEAR(CURDATE()))";
					$insert3="INSERT INTO balapathra_karmantha_short(nama,address,balapathra_ankaya,ekathuwa,masaya,sub_date,sub_time) VALUES('$kname','$kaddres',$knumb,'$kpayment','$kmonth',CURDATE(),CURTIME())";
					$inoti="INSERT INTO prasa_two(vistharaya,geweema,Approved,wargaya) VALUES('$info','$kpayment','false',' කර්මාන්ත බලපත්‍ර')";
				}
				if(!$invalid){
				if(mysqli_query($connection, $insert)&& mysqli_query($connection, $insert3) && mysqli_query($connection, $inoti)){
					echo "<script>alert('$str')</script>";
	
				}
				else{
					echo "ERROR: Could not able to execute $insert. " . mysqli_error($connection);
				}
				
				}
				
			}
			else{
				echo "<script>alert('ලියාපදිංචි නොකළ පාරිභෝගිකයෙකි.කරුණාකර පළමුව ලියාපදිංචි කරන්න.!')</script>";
				}
			}else{
				echo "<script>alert('ගාස්තුව නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න')</script>";
				
			}
			
		}

	?>
</body>
</html>