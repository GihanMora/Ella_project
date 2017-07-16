<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","tiper")or die("connection failed!");
	$con1=mysqli_connect("localhost","root","","gamaya")or die("connection failed!");
?>

	<html>
		<head>
			<title align=center>  ටිපර් රථය පිලිබඳ තොරතුරු </title>
			<link rel="stylesheet" href="StylesBackhoeDetails1.css"/>
		</head>
	
		<body bgcolor="#98FFF98">
		
		<form method="post" action="TiperDetails1.php" align="left">
		<input type="submit" name="back" value="පෙර පිටුව"/>
		</form>
		
		<?php
		if(isset($_POST['back'])){
		header("location:TiperSelection.php");
		exit;
		}?>
		
		
		<h2 align='center'>තොරතුරු තහවුරු කිරීම හා මුදල් ගෙවීම</h2>
		
		
			<form method ="post" action ="TiperDetails1.php"></br>
			
		<div id="tableContainer-1">
		<div id="tableContainer-2">
		<table align="center" bgcolor=" #8BB381" height="100px" width="500px" id="myTable" >
			<tr>
				<td>  ජාතික හැදුනුම්පත් අංකය: </td>
				<td>  <input type="text" name="id"/> <td>
			</tr>
			<tr>
			
			<tr>
				<td>  දිනය: </td>
				<td>  <input type="date" name="date"/> <td>
			</tr>
			<tr>
			
			
			<tr>
			
				<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම හා මුදල් ගෙවීම"/></td>
			</tr>
		</form>
	<?php
							
			if(isset($_POST['sub'])){
			$share=$_POST['id'];
			$id=mysqli_real_escape_string($con,$_POST['id']);
			
			//$sel2="select * from back_hoe_owners WHERE ID = '$id'" sort by desc;
			$sel2="select * from tiper_owners WHERE ID='$id' order by DoP desc limit 1";
			$run2=mysqli_query($con,$sel2);
			$check2=mysqli_num_rows($run2);
			if($check2>0){
				
				echo '<h2 align="center">ටිපර් රථය කුලියට ගත් තොරතුරු</h2>';
				
			$row2=mysqli_fetch_array($run2);
			$name=$row2['Name'];
			$id= $row2['ID'];
			$address=$row2['Address'];
			$tp=$row2['TP'];
			$advance=$row2['Advance'];
			$total=$row2['Total'];
			$dos=$row2['DoS'];
			$dop=$row2['DoP'];
			
			$description="".$name."  ".$id." ".$address;
			$section="ටිපර් හිග මුදල ගෙවීම";
			
			$today=date("Y-m-d");
			
			$DOS=new DateTime($row2['DoS']);// change
			$date=new DateTime('now');
			
			
			
			
			$remain=$total-$advance;
			$fine=0;
			$grandtot=$remain;
			if($today>$dos){
				$diff=date_diff($date,$DOS);//change
				$d=$diff->d;
				$m=$diff->m;
				$y=$diff->y;
				
				$fine=($d+$m*30+$y*365)*1000;
				$grandtot=$grandtot+$fine;
				
			}
			$true=1;
			$false=0;
			$insert1="update tiper_owners set Total=$grandtot,TotalPaid=$true  WHERE ID='$id' order by DoP desc limit 1";
			$insert2="update tiper_availability set Availability=$true where TNumber='T1'";
			$insert3="insert into prasa_two(vistharaya,geweema,Approved,wargaya) values ('$description','$grandtot','false','$section') ";
			$run1=mysqli_query($con,$insert1);
			$run1=mysqli_query($con,$insert2);
			$run3=mysqli_query($con1,$insert3);
			echo	'<table align="center" bgcolor=" #8BB381" width="500px" height="270px">
					<tr>
						<td> සම්පූර්ණ නම : </td>
						<td>'.$name .'</td>
					</tr>
					
					<tr>
						<td>  ජාතික හැදුනුම්පත් අංකය: </td>
						<td>'.$id.'</td>
					</tr>
					
					
					<tr>
						<td> ලියාපදිංචි ලිපිනය:  </td>
						<td>'.$address.' </td>
					</tr>
					
					<tr>
						<td> දුරකතන අංකය: </td>
						<td> '. $tp.' </td>
					</tr>
					
					<tr>
						<td> ගෙවිය යුතු මුළු මුදල:</td>
						<td>'.$remain.'</td>
					</tr>
				
					<tr>
						<td> දඩ මුදල:</td>
						<td>'.$fine.'</td>
					</tr>
				
					<tr>
						<td> දඩ සමග මුළු මුදල:</td>
						<td>'.$grandtot.'</td>
					</tr>
				
					</table>';
					
			// though the fine is mentioned still a fine is not charged send the total as the total without the fine,	
			//do the relevant things for the payment.
				
				
				
			}
			else{
				echo '<h2>අනන්‍යතාවය තහවුරු නැත </h2><br/>';
					
			}
			}
				?>
		</body>		
</html>