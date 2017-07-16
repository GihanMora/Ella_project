<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","wahananawathuma")or die("connection failed!");
?>

<html>
	<head>
	<title> තෝරාගැනීම් </title>
	<link rel="stylesheet" href="StylesIdamPrasa.css"/>
	</head>
	<body>
	<form method="post" action="WahanaNawathumPrasa.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:WahanaNawathumHome.php");
	exit;
	}?>
	
		<div class='head'>
		<h2 align='center' color="black"> ඇල්ල ප්‍රාදේශීය සභාව වාහන නැවතුම්</h2>
		<h2 align="center"> ගෙවීම් තොරතුරු</h2>
	</div>

	<?php
	if(isset($_POST['sub1'])){
			
			$sel=$_POST['select1'];
			$date=$_POST['day'];
			$yearinput=date('Y',strtotime($date));
			
			
			
			//start of prasa 2
			
			if($sel=='prasa2'){				
			echo '<table align="left" border width="350px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>භාර දුන් මුදල</th>
		</tr>';
			
				
			$select="select * from payment where Date='$date'";
			$run=mysqli_query($con,$select);
			$dayadvancetotal=0;
			$daytotal=0;
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$paydate=$row['Date'];
				$amount=$row['Amount'];
				$Paid=$row['Paid'];
				$advance=0;
			
				if ($Paid){
					$advance=$row['Amount'];
					$dayadvancetotal=$dayadvancetotal+$advance;
					echo '<tr>
			<td>'.$name.'</td>
			<td>'.$amount.'</td>

		
		</tr>';
				}
		
		
				
			}
			echo '</table>';

			echo ' <div class = "dinaya">මෙම දිනයට මුළු  මුදල  රු. :' .$dayadvancetotal.'.00 /=</br>';
		
			
			// end of prasa 2


		echo '<form method ="post" action ="WahanaNawathumPrasa.php" align="left">
				<input type="button" onClick="window.print() "name="print" value=" මුද්‍රණය කිරීම" />
		</form></div>';
		
		
			
			}else if($sel=='prasa4'){
				
			
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
		
	
			
			echo '<h2> මෙම අවුරුද්දට අදාළ ගෙවීම් තොරතුරු</h2>';
			
			echo '<table align="left" border width="2000px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			
			
			
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
			
				
			$select="select * from payment ";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];			
				//$paydate=$row['PayDate'];
				
				$payday=$row['Date'];
				$advancePaid=$row['Paid'];
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
							$jan=$jan+$row['Amount'];
							$jan1=$row['Amount'];
						} else if($databasemonth=="Feb"){
							$feb=$feb+$row['Amount'];
							$feb1=$row['Amount'];
						} else if($databasemonth=="Mar"){
							$mar=$april+$row['Amount'];
							$mar1=$row['Amount'];
						} else if($databasemonth=="Apr"){
							$april=$april+$row['Amount'];
							$april1=$row['Amount'];
						} else if($databasemonth=="May"){
							$may=$may+$row['Amount'];
							$may1=$row['Amount'];
						} else if($databasemonth=="Jun"){
							$june=$june+$row['Amount'];
							$june1=$row['Amount'];
						} else if($databasemonth=="Jul"){
							$july=$july+$row['Amount'];
							$july1=$row['Amount'];
						} else if($databasemonth=="Aug"){
							$aug=$aug+$row['Amount'];
							$aug1=$row['Amount'];
						}  else if($databasemonth=="Sep"){
							$sep=$sep+$row['Amount'];
							$sep1=$row['Amount'];
						}  else if($databasemonth=="Oct"){
							$oct=$oct+$row['Amount'];
							$oct1=$row['Advance'];
						}  else if($databasemonth=="Nov"){
							$nov=$nov+$row['Amount'];
							$nov1=$row['Amount'];
						}  else if($databasemonth=="Dec"){
							$dec=$dec+$row['Amount'];
							$dec1=$row['Amount'];
						}
						
						
				
				$remainder=0;
				$advance=0;
			
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$payday.'</td>
			
			
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
			
	
			
	
	
		
		echo '<p>මෙම අවුරුද්දට අදාළ මුළු  මුදල රු.'.$advancetotal.'.00/=</br>';

		
			echo '<form method ="post" action ="WahanaNawathumPrasa.php" align="left">
				<input type="button" onClick="window.print() "name="print" value=" මුද්‍රණය කිරීම" />
		</form>';
		
		
		
			}
			
			
			
		
			
			// end of prasa 4
			//echo '<p  id="boxx">මෙම අවුරුද්දට අදාළ මුළු අත්තිකාරම් මුදල'.$advancetotal.'</br>
					//මෙම අවුරුද්දට අදාළ මුළු හිඟ මුදල'.$remaindertot.'</p>';
		}
		
		else{
			
			
			
			echo '<form method ="post" action ="WahanaNawathumPrasa.php">
			<table align="right" border width="350px"  id="myTable1">
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
				<td> <input type="submit" name="sub1" value=" ඇතුලත් කිරීම"/></td>
			</tr>
			</table>
			</form>	';
			
			
		
		echo '<table align="left" border width="900px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>දිනය</th>
			<th> මුදල  රු. </th>
			
		</tr>';
			
			$select="select * from payment";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$paydate=$row['Date'];
				$total=0;
				$advance=0;
				$advance=$row['Amount'];
				$advancePaid=$row['Paid'];
		
		echo '<tr>
			<td>'.$name.'</td>
			<td>'.$paydate.'</td>
			<td>'.$advance.'</td>

		</tr>';
		
		}
		echo '</table>';
		}
	
	?>
	
		
	
	

	
	</body>
</html>