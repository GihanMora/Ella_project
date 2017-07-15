<html>
<head><title>කඩකුලී අයකිරීම</title>
	<link rel="stylesheet" type="text/css" href='gasthu.css'>
</head>
<body class='body'>
	<div class='head'>
	logged in as:
	
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-ගාස්තු අයකිරීම</h2>
	<h4 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-කඩකුලී අයකිරීම</h4>
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
	<a href="kadakulitable.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='ගිණුම් විස්තර පිරික්සීම.'></a>
	<a href="shop_info.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='see' name='button' value='කඩකුලී ලියාපදිංචි ලේඛණය.'></a>

	</div>
	<div id='form'>
	<form action='kadakuli.php' method='post' >
		
			<table class='table'>
			<tr><td align='center'><b>කඩකුලී ඇතුලත් කිරීම</b></td></tr>
				<tr><td>ලියාපදිංචි  අංකය:<input type='text' required='true' name='numb' placeholder='ලියාපදිංචි  අංකය'></td></tr>
				<tr><td>මාසය:<select name='Month'>       
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
				<tr><td>ගාස්තුව:<input type='integer' name='payment2' required='true' placeholder='ගාස්තුව'></td></tr>
				<tr><td><input class='b2' type='submit' name='enter' value='ඇතුලත් කරන්න' required='true'></td></tr>
			</table>
			
		
	</form>
	</div>
	<div id='form'>
		<form action='kadakuli.php' method='post'>
			<table class='table'>
				<tr><td align='center'><b>කඩහිමියන් ලියාපදිංචිය</b></td></tr>
				<tr><td>ව්‍යාපාරයේ නම:<input type='text' required='true'  name='name' placeholder='ව්‍යාපාරයේ නම'></td></tr>
				<tr><td>කඩහිමියාගේ නම:<input type='text' required='true' name='oname1' placeholder='කඩහිමියාගේ නම'></td></tr>
				<tr><td>ලියාපදිංචි අංකය:<input type='text' required='true' name='regnum' placeholder='ලියාපදිංචි අංකය'></td></tr>
				<tr><td>තක්සේරු මුදල:<input type='text' required='true'  name='esti' placeholder='තක්සේරු මුදල'></td></tr>
				
				<tr><td>ලිපිනය:<input type='text' required='true' name='address' placeholder='ලිපිනය'></td></tr>
				
				<tr><td><input class='b2' type='submit' name='registershop' value='ලියාපදිංචි කරන්න.' required='true'></td></tr>
			</table>
		</form>
	</div>
	</div>
	<?php
		if(isset($_POST['registershop'])){
			$name1=mysqli_real_escape_string($connection,$_POST['name']);
			$owner1=mysqli_real_escape_string($connection,$_POST['oname1' ]);
			$regnum1=mysqli_real_escape_string($connection,$_POST['regnum' ]);
			$esti1=mysqli_real_escape_string($connection,$_POST['esti']);
			$address1=mysqli_real_escape_string($connection,$_POST['address']);
			if(is_numeric($esti1)){
				
			
			$insert_shp="INSERT INTO shoplist(nama,owner,regno,est,address) VALUES('$name1','$owner1',$regnum1,$esti1,'$address1')";
			
			if(mysqli_query($connection, $insert_shp)){
				echo "<script>alert('කඩකුලී  ගාස්තු සාර්ථකව ලියාපදිංචි කරන ලදී.')</script>";
	
			}
			else{
				if(mysqli_errno($connection)==1062){
					echo "<script>alert('ලියාපදිංචි අංකය නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න')</script>";
				}
		}}else{
			echo "<script>alert('තක්සේරු මුදල නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න')</script>";
			
		}
		}
		if(isset($_POST['enter'])){
			$numb= mysqli_real_escape_string($connection,$_POST['numb']);
			$month=mysqli_real_escape_string($connection,$_POST['Month']);
			$payment2=mysqli_real_escape_string($connection,$_POST['payment2']);
			if(is_numeric($payment2)){
			$columns=array('jan','feb','mar','april','may','june','july','aug','sep','oct','nov','december');
			$mons=array('January','February','March','April','May','June','July','August','September','October','November','December');
			for($i=0;$i<12;$i++){
				if($month==$mons[$i]){
					$mon=$columns[$i];
					break;
				}
			}
			$yy=date('Y');
			$ck="select nama from kadakulifull WHERE regno='$numb' && year='$yy'";
			$rr=mysqli_query($connection, $ck);
			$isreg="select nama from shoplist WHERE regno='$numb'";
			$regq=mysqli_query($connection, $isreg);
			$addno="select owner,nama from shoplist WHERE regno='$numb'";
			$addnoq=mysqli_query($connection, $addno);
			$addnores=mysqli_fetch_array($addnoq);
			$owner2=$addnores[0];
			$name2=$addnores[1];
			$invalid=false;
			$info="ලියාපදිංචි අංකය: ".$numb."\n නම: ". $name2." \nකඩහිමියාගේ නම: ".$owner2."\nමාසය :".$month;
						
						
			if($res = mysqli_fetch_array($regq)){
				if($w = mysqli_fetch_array($rr)){
					
					$c2="select $mon from kadakulifull where regno='$numb' && year='$yy'";
					$ex=mysqli_query($connection, $c2);
					$res2=mysqli_fetch_array($ex);
					if($res2[0]==null){
						$insert="UPDATE kadakulifull SET $mon='$payment2' WHERE nama='$name2' && year='$yy'";
						$insert3="INSERT INTO kadakulishort(nama,regno,owner,ekathuwa,masaya,sub_date,sub_time) VALUES('$name2','$numb','$owner2','$payment2','$month',CURDATE(),CURTIME())";
						$inoti="INSERT INTO prasa_two(vistharaya,geweema,Approved,wargaya) VALUES('$info','$payment2','false',' කඩකුලී')";
						
						$str=$w[0]."  කඩකුලී ගිණුම් තොරතුරු යාවත්කාලීන කරන ලදී.";
					}
					else{
						echo "<script>alert('මෙම මස ගාස්තු දැනටමත් ඇතුළත් කර ඇත. නැවත පරීක්ෂාකර බලා ඇතුළත් කරන්න.')</script>";
						$invalid=true;
						
					}
					
				}
				else{
					$str=$res[0]."  කඩකුලී ගිණුම් තැබීම   $yy වර්ෂය සඳහා  අරඹන කරන ලදී..";
					$insert="INSERT INTO kadakulifull(nama,regno,owner,masaya,$mon,year) VALUES('$name2','$numb','$owner2','$month','$payment2',YEAR(CURDATE()))";
					
					$insert3="INSERT INTO kadakulishort(nama,regno,owner,ekathuwa,masaya,sub_date,sub_time) VALUES('$name2','$numb','$owner2','$payment2','$month',CURDATE(),CURTIME())";
					$inoti="INSERT INTO prasa_two(visthraya,geweema,Approved) VALUES('$info','$payment2','false')";
				}
				if(!$invalid){
				if(mysqli_query($connection, $insert) && mysqli_query($connection, $insert3) && mysqli_query($connection, $inoti)){
					echo "<script>alert('$str')</script>";
	
				}
				else{
					echo "ERROR: Could not able to execute errorrrrrrrrrrrrrrrororr " . mysqli_error($connection);
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