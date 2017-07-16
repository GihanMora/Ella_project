<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","waterbowser")or die("connection failed!");
	$con1=mysqli_connect("localhost","root","","gamaya")or die("connection failed!");
	
?>

	<html>
		<head>
			<title> ජල බවුසරය පිලිබඳ තොරතුරු </title>
			<link rel="stylesheet" href="StylesBackhoeDetails.css"/>
		</head>
	
		<body>
			<form method="post" action="WaterBowserDetails.php" align="left">
		<input type="submit" name="back" value="පෙර පිටුව"/>
		</form>
		
		<?php
		if(isset($_POST['back'])){
		header("location:WaterBowserSelection.php");
		exit;
		}?>
			
		
		
		<?php
		$select="select * from water_bowser_availability where WNumber='W1'"; 
		$run=mysqli_query($con,$select);
		$raw=mysqli_fetch_array($run);
		$availability=$raw['Availability'];
		if ($availability==1){
		?>	
		
		<h2 align=center>ජල බවුසරය රථය කුලියට දීමට ඇත.</h2>
		<h2 align=center> ජල බවුසරය ලබා ගැනීම සදහා විස්තර  ඇතුලත් කිරීම  </h2>
		

	<form method ="post" action ="WaterBowserDetails.php"></br>
		<div id="tableContainer-1">
		<div id="tableContainer-2">
		<table align="center"  height="400px" width="450px" id="myTable" >
			<tr>
				<td>  සම්පූර්ණ නම :  </td>
				<td>  <input type="text" name="name"/> <td>
			</tr>
			<tr>
				<td> ජාතික හැදුනුම්පත් අංකය:</td>
				<td> <input type="text" name="id" /></td>
			</tr>
			<tr>
				<td>ලියාපදිංචි ලිපිනය:</td>
				<td> <input type="text" name="Adress" /></td>
			</tr>
			<tr>
				<td> දුරකතන අංකය:</td>
				<td>  <input type="text" name="Telephone" /></td>
			</tr>
			<tr>
			</tr>
			<tr>
				<td> රථය ලබා ගන්නා දිනය:</td>
				<td>  <input type="date" name="dop" required="required" /></td>
			</tr>
			<tr>
			
			<tr>
				<td> නැවත භාර දෙන දිනය:</td>
				<td>  <input type="date" name="dos" required="required" /></td>
			</tr>
			<tr>
			
			
			<tr>
				<td> කුලියට ගන්නා දින ගණන:</td>
				<td>  <input type="number" name="nod" /></td>
			</tr>
			<tr>
			
			<tr>
				<td> දිනයකට අදාළ වර්තමාන ගාස්තුව:</td>
				<td>  <input type="number" step="0.01" name="amount" /></td>
			</tr>
			<tr>
			
			<tr>
				<td> දඩ සඳහා වර්තමාන ගාස්තුව:</td>
				<td>  <input type="number" step="0.01" name="fine" /></td>
			</tr>
			<tr>
			
				<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></td>
			</tr>
		</table>
		</div>
		</div>
	</form>
		
		<?php
		if(isset($_POST['sub'])){
		$name     =$_POST['name'];
		$id       =$_POST['id'];
		$address   =$_POST['Adress'];
		$telephone=$_POST['Telephone'];
		$dop=mysqli_real_escape_string($con,$_POST['dop']);
		$dos=$_POST['dos'];
		$nod=$_POST['nod'];
		$amount=$_POST['amount'];
		$fine=$_POST['fine'];
		
		$description="".$name."  ".$id." ".$address;
		$section="ජල බවුසරය අත්තිකාරම් මුදල් ගෙවීම";
		
		// TO CHECK WHETHER ALL THE DATA IS ENTERED.
		
		if(empty($name)|| empty($id)||empty($address)||empty($telephone)||empty($dop)||empty($dos)||empty($nod)||empty($amount)||empty($fine)){
			echo "<script type='text/javascript'> alert (' සියලුම දත්ත අතුලත් කර නැත ');</script>";
		} else if($dos<$dop) {
			echo "<script type='text/javascript'> alert ('නැවත භාර දෙන දිනය භාර ගත් දිනයට වඩා පසු දිනයක් විය යුතුය');</script>";
		} else if($amount<=0 || $nod<=0 ||$fine<0){
			echo "<script type='text/javascript'> alert (' මුදල් අගයන් හා දින අගයන් ධන විය යුතුය ');</script>";
		}
		
		else{ 
		
		
		//CALCULATION.
		
		$total=round($amount*$nod,2);
		$advance=$total/4;
		$remainder=$total-$advance;
		
		//echo '<h3>මුළු මුදල :   රු. '.$total.'.00 /= </h3>';
		//echo '<h3>අත්තිකාරම් මුදල:   රු. '.$advance.'.00 /= </h3>';
		
		
		echo 	'<p  id="boxx">
					මුළු මුදල                 : රු. '.$total.'.00 /= </br>
					අත්තිකාරම් මුදල    :රු. '.$advance.'.00 /=
				</p>';
		
		
		
		//INSERT DATA.
		$true=1;
		$false=0;
		$insert1="insert into water_bowser_owners(Name,ID,Address,TP,DoP,DoS,Advance,Total,PayDate,Remainder,AdvancePaid) values('$name','$id','$address','$telephone','$dop','$dos','$advance','$total','$dop','$remainder','$true')";
		$insert2="update tiper_availability set Availability=$false where WNumber='W1'";
		$insert3="insert into gamaya prasa_two(vistharaya,geweema,Approved,wargaya) values ('$description','$advance','false',$section) ";
		$run=mysqli_query($con,$insert1);
		$run2=mysqli_query($con,$insert2);
		$run3=mysqli_query($con1,$insert3);
		if($run){
			echo "<script type='text/javascript'> alert (' සාර්ථකව දත්ත අතුලත් කරන ලදී ');</script>";
			
		} else{
			echo "<script type='text/javascript'> alert (' දත්ත අතුලත් කරීම අසාර්ථක විය ');</script>";
			
			}
		mysqli_close($con);
		}}
		}else{
			
			//DISPLAY THE DETAILS OF THE LAST PERSON WHO HIRED THE VEHICLE
			$select1="select * from water_bowser_owners order by No desc limit 1";
			$run1=mysqli_query($con,$select1);
			$row1=mysqli_fetch_array($run1);
			$name =$row1['Name'];
			$id=$row1['ID'];
			$tp=$row1['TP'];
			$dop=$row1['DoP'];
			$dos=$row1['DoS'];
			$remainder=$row1['Remainder'];
			
			echo '<h2 align=center> ජල බවුසරය කුලියට දීමට නොමැත</h2><br/><p align="center">අවසානයට කුලියට ගත් පුද්ගල තොරතුරු</p>';
			echo '<div id="tableContainer-1">
					<div id="tableContainer-2">
			
			<table align="center" bgcolor="#C48189" width="500px" height="300px" id="myTable" border>
			<tr>
			<td align="right"> නම  : </td>
			<td> '.$name. '</td></br>
			</tr>
			
			<tr>
			<td align="right"> හැ. අංකය :</td>
			<td> '.$id .'</td></br>
			</tr>
			
			<tr>
			<td align="right"> දු.අංකය  :</td>
			<td> '. $tp.'</td></br>
			</tr>
			
			<tr>
			<td align="right"> කුලියට ගත් දිනය  :</td>
			<td> '.$dop.'</td></br>
			</tr>
			
			<tr>
			<td align="right"> නැවත භාර දෙන දිනය  :</td>
			<td> '.$dos.'</td></br>
			</tr>
			<tr>
			<td align="right"> හිඟ මුදල :</td>
			<td> '.$remainder.'</td></br>
			</tr>
			
			
			</table>';
			
			// code to come exit.
		
		}
		?>
		</body>
	</html>