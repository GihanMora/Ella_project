<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","back_hoe")or die("connection failed!");
?>

<html>
	<head>
	<title> තෝරාගැනීම් </title>
	<link rel="stylesheet" href="StylesBack-hoePrasa.css"/>
	</head>
	<body>
	
	<form method="post" action="Back-hoePrasa.php" align="left">
		<input type="submit" name="back" value="පෙර පිටුව"/>
		</form>
		
		<?php
		if(isset($_POST['back'])){
		header("location:Back-hoeSelection.php");
		exit;
		}?>
		
		<div class='head'>
		<h2 align='center' color="black"> ඇල්ල ප්‍රාදේශීය සභාව ජල බවුසරය කුලියට ගැනීම </h2>
		<h2 align=center> ගෙවීම් තොරතුරු</h2>
		</div>
		
		
		
		

	<?php
	if(isset($_POST['sub'])){
			
			$sel=$_POST['select1'];
			$date=$_POST['day'];
			$yearinput=date('Y',strtotime($date));
			
			
			
			//start of prasa 2
			
			if($sel=='prasa2'){				
			echo '<div id="shorttable" style= "width:1800px;">
			<table align="left" border width="900px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			<th>දු.අංකය</th>
			<th>ගත් දිනය </th>
			<th> භාර දෙන දිනය</th>
			<th> අත්තිකාරම් ගාස්තු</th>
			<th> මුළු මුදල </th>
		</tr>';
			
				
			$select="select * from back_hoe_owners where PayDate='$date'";
			$run=mysqli_query($con,$select);
			$dayadvancetotal=0;
			$daytotal=0;
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$dop=$row['DoP'];
				$dos=$row['DoS'];
				
				$remainder=0;
				$advance=0;
				
				$advancePaid=$row['AdvancePaid'];
				$totalPaid=$row['TotalPaid'];
				if ($advancePaid){
					$advance=$row['Advance'];
					$dayadvancetotal=$dayadvancetotal+$advance;
				}
				if($totalPaid){
					$remainder=$row['Remainder'];
					$daytotal=$daytotal+$remainder;
				}
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$id.'</td>
			<td>'.$tp.'</td>
			<td>'.$dop.'</td>
			<td>'.$dos.'</td>
			<td>'.$advance.'</td>
			<td>'.$remainder.'</td>
		</tr>';
				
			}
			echo '</table></div>';

			echo ' <div class = "dinaya">මෙම දිනයට මුළු අත්තිකාරම් මුදල =  රු. ' .$daytotal.' .00/=</br>';
			echo 'මෙම දිනයට හිඟ  මුදල  = රු. ' .$dayadvancetotal.' .00/=</br>';
			$grandtot=$dayadvancetotal+$daytotal;
			echo 'මෙම දිනයට මුළු මුදල = රු ' .$grandtot.'.00/= ';
			
			// end of prasa 2


		echo '<form method ="post" action ="Back-hoePrasa.php" align="left">
				<input type="button" onClick="window.print() "name="print" value=" මුද්‍රණය කිරීම" />
		</form></div>';
		
		
			
			}else if($sel=='prasa4'){
				
			$remaindertot=0;
			$advancetotal=0;
			//year calculation
				
			$jan=0;
			$feb=0;
			$mar=0;
			$april=0;
			$may=0;
			$june=0;
			$july=0;
			$aug=0;
			$sep=0;
			$oct=0;
			$nov=0;
			$dec=0;
		
			
			$jantot=0;
			$febtot=0;
			$martot=0;
			$apriltot=0;
			$maytot=0;
			$junetot=0;
			$julytot=0;
			$augtot=0;
			$septot=0;
			$octtot=0;
			$novtot=0;
			$dectot=0;
			
			echo '<h2> මෙම අවුරුද්දට අදාළ අත්තිකාරම් ගෙවීම් තොරතුරු</h2>';
			
			echo '<table align="left" border width="2000px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			<th>දු.අංකය</th>
			<th>ගත් දිනය </th>
			<th> භාර දෙන දිනය</th>
			
			
			<th>ජන</th>
			<th>පෙබ</th>
			<th>මාර්</th>
			<th>අප්‍රේ</th>
			<th>මැයි</th>
			<th>ජුනි</th>
			<th>ජූලි</th>
			<th>අගෝ</th>
			<th>සැප්</th>
			<th>ඔක්</th>
			<th>නොවැ</th>
			<th>දෙසැ</th>
			
	
			
		</tr>';
			
				
			$select="select * from back_hoe_owners ";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$dop=$row['DoP'];
				$dos=$row['DoS'];
				$payday=$row['PayDate'];
				$advancePaid=$row['AdvancePaid'];
				$totalPaid=$row['TotalPaid'];
				
				
				$databasedate=date('Y',strtotime($payday));
				
				//start same logic here
				if($databasedate==$yearinput && $advancePaid){
						$databasemonth=date('M',strtotime($payday));
						$jan1=0;
						$feb1=0;
						$mar1=0;
						$april1=0;
						$may1=0;
						$june1=0;
						$july1=0;
						$aug1=0;
						$sep1=0;
						$oct1=0;
						$nov1=0;
						$dec1=0;
			
						if($databasemonth=="Jan"){
							$jan=$jan+$row['Advance'];
							$jan1=$row['Advance'];
						} else if($databasemonth=="Feb"){
							$feb=$feb+$row['Advance'];
							$feb1=$row['Advance'];
						} else if($databasemonth=="Mar"){
							$mar=$april+$row['Advance'];
							$mar1=$row['Advance'];
						} else if($databasemonth=="Apr"){
							$april=$april+$row['Advance'];
							$april1=$row['Advance'];
						} else if($databasemonth=="May"){
							$may=$may+$row['Advance'];
							$may1=$row['Advance'];
						} else if($databasemonth=="Jun"){
							$june=$june+$row['Advance'];
							$june1=$row['Advance'];
						} else if($databasemonth=="Jul"){
							$july=$july+$row['Advance'];
							$july1=$row['Advance'];
						} else if($databasemonth=="Aug"){
							$aug=$aug+$row['Advance'];
							$aug1=$row['Advance'];
						}  else if($databasemonth=="Sep"){
							$sep=$sep+$row['Advance'];
							$sep1=$row['Advance'];
						}  else if($databasemonth=="Oct"){
							$oct=$oct+$row['Advance'];
							$oct1=$row['Advance'];
						}  else if($databasemonth=="Nov"){
							$nov=$nov+$row['Advance'];
							$nov1=$row['Advance'];
						}  else if($databasemonth=="Dec"){
							$dec=$dec+$row['Advance'];
							$dec1=$row['Advance'];
						}
						
						
				
				$remainder=0;
				$advance=0;
			
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$id.'</td>
			<td>'.$tp.'</td>
			<td>'.$dop.'</td>
			<td>'.$dos.'</td>
			
			
			<td>'.$jan1.'</td>
			<td>'.$feb1.'</td>
			<td>'.$mar1.'</td>
			<td>'.$april1.'</td>
			<td>'.$may1.'</td>
			<td>'.$june1.'</td>
			<td>'.$july1.'</td>
			<td>'.$aug1.'</td>
			<td>'.$sep1.'</td>
			<td>'.$oct1.'</td>
			<td>'.$nov1.'</td>
			<td>'.$dec1.'</td>
			
			
			
			
			
				</tr>';
				
				
				}   // end logic here
		}
			echo '</table>';
			$advancetotal=$jan+$feb+$mar+$april+$may+$june+$july+$aug+$sep+$oct+$nov+$dec;
			
			
				
				echo '<h2> මෙම අවුරුද්දට අදාළ හිඟ  ගෙවීම් තොරතුරු</h2>';
			
				echo '<table align="left" border width="2000px"  id="myTable1">
			<tr>
				<th> නම</th>
				<th>හැ. අංකය </th>
				<th>දු.අංකය</th>
				<th>ගත් දිනය </th>
				<th> භාර දෙන දිනය</th>
				
				
				<th>ජන</th>
				<th>පෙබ</th>
				<th>මාර්</th>
				<th>අප්‍රේ</th>
				<th>මැයි</th>
				<th>ජුනි</th>
				<th>ජූලි</th>
				<th>අගෝ</th>
				<th>සැප්</th>
				<th>ඔක්</th>
				<th>නොවැ</th>
				<th>දෙසැ</th>
				
		
				
		</tr>';
		
			
			
			
			
			
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$dop=$row['DoP'];
				$dos=$row['DoS'];
				$payday=$row['PayDate'];
				$advancePaid=$row['AdvancePaid'];
				$totalPaid=$row['TotalPaid'];
				
				
			$databasedate=date('Y',strtotime($payday));
			if($databasedate==$yearinput && $totalPaid){
					
						$databasemonth=date('M',strtotime($payday));

						
						$jan2=0;
						$feb2=0;
						$mar2=0;
						$april2=0;
						$may2=0;
						$june2=0;
						$july2=0;
						$aug2=0;
						$sep2=0;
						$oct2=0;
						$nov2=0;
						$dec2=0;
			
						if($databasemonth=="Jan"){
							$jantot=$jantot+$row['Remainder'];
							$jan2=$row['Remainder'];
						} else if($databasemonth=="Feb"){
							$febtot=$febtot+$row['Remainder'];
							$feb2=$row['Remainder'];
						} else if($databasemonth=="Mar"){
							$martot=$martot+$row['Remainder'];
							$mar2=$row['Remainder'];
						} else if($databasemonth=="Apr"){
							$apriltot=$apriltot+$row['Remainder'];
							$april2=$row['Remainder'];
						} else if($databasemonth=="May"){
							$maytot=$maytot+$row['Remainder'];
							$may2=$row['Remainder'];
						} else if($databasemonth=="Jun"){
							$junetot=$junetot+$row['Remainder'];
							$june2=$row['Remainder'];
						} else if($databasemonth=="Jul"){
							$julytot=$julytot+$row['Remainder'];
							$july2=$row['Remainder'];
						} else if($databasemonth=="Aug"){
							$augtot=$augtot+$row['Remainder'];
							$aug2=$row['Remainder'];
						}  else if($databasemonth=="Sep"){
							$septot=$septot+$row['Remainder'];
							$sept2=$row['Remainder'];
						}  else if($databasemonth=="Oct"){
							$octtot=$octtot+$row['Remainder'];
							$oct2=$row['Remainder'];
						}  else if($databasemonth=="Nov"){
							$novtot=$novtot+$row['Remainder'];
							$nov2=$row['Remainder'];
						}  else if($databasemonth=="Dec"){
							$dectot=$dectot+$row['Remainder'];
							$dec2=$row['Remainder'];
						}
				
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$id.'</td>
			<td>'.$tp.'</td>
			<td>'.$dop.'</td>
			<td>'.$dos.'</td>
			
			
			<td>'.$jan2.'</td>
			<td>'.$feb2.'</td>
			<td>'.$mar2.'</td>
			<td>'.$april2.'</td>
			<td>'.$may2.'</td>
			<td>'.$june2.'</td>
			<td>'.$july2.'</td>
			<td>'.$aug2.'</td>
			<td>'.$sep2.'</td>
			<td>'.$oct2.'</td>
			<td>'.$nov2.'</td>
			<td>'.$dec2.'</td>
			
			
			
			
			
				</tr>';
				
				
				}   // end logic here		
			
			}  echo '</table>';	
			
		$remaindertot=$jantot+$febtot+$martot+$apriltot+$maytot+$junetot+$julytot+$augtot+$septot+$octtot+$novtot+$dectot;
		$finaltotal=$remaindertot+$advancetotal;
		
		
		echo '<p>මෙම අවුරුද්දට අදාළ මුළු අත්තිකාරම් මුදල  =  රු. '.$advancetotal.' .00 /=</br>';
		echo 'මෙම අවුරුද්දට අදාළ මුළු හිඟ මුදල = රු. '.$remaindertot.'.00 /=</br>';
		echo 'මුළු මුදල  = රු. '.$finaltotal.' ./= </p>';
		
			echo '<form method ="post" action ="Back-hoePrasa.php" align="left">
				<input type="button" onClick="window.print() "name="print" value=" මුද්‍රණය කිරීම"  width="20px" align="center" />
		</form>';
		
		
		
			}
			
			
			
		
			
			// end of prasa 4
			//echo '<p  id="boxx">මෙම අවුරුද්දට අදාළ මුළු අත්තිකාරම් මුදල'.$advancetotal.'</br>
					//මෙම අවුරුද්දට අදාළ මුළු හිඟ මුදල'.$remaindertot.'</p>';
		}
		
		else{
			
			
			
			echo '<form method ="post" action ="Back-hoePrasa.php">
			<table align="right" border width="350px"  id="myTable" bgcolor="#52D017">
			<tr>
				<td>  දිනය:</td>
				<td><input type="date" name="day" required="required" /></td>
			</tr>
			
			<tr>			
				<td> ප්‍රාසා අංකය </td>
				<td>
				<select name = "select1">
				<option value ="prasa2"> ප්‍රාසා2</option>
				<option value ="prasa4"> ප්‍රාසා4</option>
				</select>
				</td>
			</tr>
			<tr>
				<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></td>
			</tr>
			</table>
			</form>	';
			
			
		
		echo '<table align="left" border width="900px"  id="myTable1" bgcolor=" #8BB381">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			<th>දු.අංකය</th>
			
			<th>ගත් දිනය </th>
			<th> භාර දෙන දිනය</th>
			<th> අත්තිකාරම් ගාස්තු</th>
			<th> මුළු මුදල </th>
		</tr>';
			
			$select="select * from back_hoe_owners";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$dop=$row['DoP'];
				$dos=$row['DoS'];
				
				$total=0;
				$advance=0;
				
				$advancePaid=$row['AdvancePaid'];
				$totalPaid=$row['TotalPaid'];
				if ($advancePaid){
					$advance=$row['Advance'];
				}
				if($totalPaid){
					$total=$row['Total'];
				}
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$id.'</td>
			<td>'.$tp.'</td>
			<td>'.$dop.'</td>
			<td>'.$dos.'</td>
			<td>'.$advance.'</td>
			<td>'.$total.'</td>
		</tr>';
		
		}
		echo '</table>';
		}
	
	?>
	
		
	
	

	
	</body>
</html>