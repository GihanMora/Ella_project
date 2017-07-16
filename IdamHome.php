<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","idam")or die("connection failed!");
	$con1=mysqli_connect("localhost","root","","gamaya")or die("connection failed!");
?>

<html>
	<head>
	<title> ඉඩම් ලියාපදිංචි කිරීම</title>
	<link rel="stylesheet" href="StylesIdamaHome.css"/>
	</head>
	
	<body>
	
		
	<form method="post" action="IdamHome.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:IdamSelection.php");
	exit;
	}?>
		
	
	
	<h2> ඉඩම් ලියාපදිංචිය </h2>
	
	<form method ="post" action ="IdamHome.php">
		<table align="center" id="myTable1" width="550px" height="450px">
		<tr>
		<td align="right"> සම්පූර්ණ නම: </td>
		<td>
		<input type="text" name="name" />
		</td></br>
		</tr>
		
		<tr>
		<td align="right"> ජාතික හැදුනුම්පත් අංකය: </td>
		<td>
		<input type="text" name="id" />
		</td>
		</tr>
		
		<tr>
		<td align="right"> ලිපිනය:</td>
		<td>
		<input type="text" name="address" />
		</td>
		</tr>
		
		<tr>
		<td align="right"> දුරකතන අංකය:</td>
		<td>
		<input type="number"  name="tp" />
		</td>
		</tr>
		
		<tr>
		<td align="right"> ඉඩමේ වටිනාකම :</td>
		<td>
		<input type="number" step = "0.01" name="nop" />
		</td>
		</tr>
		
		<tr>
		<td align="right"> ඉඩම භාවිතා කිරීමේ අරමුණ:</td>
		<td>
		<select name="purpose">
			<option> නිවාස</option>
			<option> වෙළඳ</option>
			<option> වෙනත්</option></select>
		
		</td>
		</tr>
		
		<tr>
		<td align="right"> ගෙවීම් සිදුකළ දිනය:</td>
		<td>
		<input type="date" name="date" />
		</td>
		</tr>
		
		<tr>
		<td align="right"> ඉඩම් අංකය:</td>
		<td>
		<input type="number"  name="RegNumber" />
		</td>
		</tr>
		
		<tr>
		<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම"/> </td>
		</tr>
		
	</table>
</form>
<?php
	if(isset($_POST['sub'])){
		
		// handle the primary key duplication error
		
		$name=$_POST['name'];
		$id=$_POST['id'];
		$address=$_POST['address'];
		$tp=$_POST['tp'];
		$nop=$_POST['nop'];
		$purpose=$_POST['purpose'];
		$date=$_POST['date'];
		$RegNumber=$_POST['RegNumber'];
		
		$description="".$name;
		$section=" වාහන නැවතුම් මුදල් ගෙවීම";
		
		
		if(empty($name)|| empty($id)||empty($address)||empty($tp)||empty($nop)||empty($purpose)||empty($date)||empty($RegNumber)){
			echo "<script type='text/javascript'> alert ('දත්ත නිවැරදිව අතුළත් කර නැත ');</script>";
		} else if ($nop<=0){
			echo "<script type='text/javascript'> alert (' පර්චර්ස් ප්‍රමණය ධන අගයක් විය යුතුය  ');</script>";
		}else{
		$iterate=($nop/100000)+1;
		$total=0;
		$i=1;
		
		while($i<$iterate){
			if ($i==1){
				$total=$total+3000;
			}else{
				$total=$total+4000;
			
			}
			$i=$i+1;
		}

		
		echo '<h3>ඉඩම් ලියාපදිංචි ගාස්තුව :   රු. '. $total. '.00/=</h3>';
		$true=1;
		$insert="insert into idam_users(Name,ID,Address,TP,Amount,PayDate,RegNum,Paid) values('$name','$id','$address','$tp','$total','$date','$RegNumber','$true')";
		$insert3="insert into gamaya prasa_two(vistharaya,geweema,Approved,wargaya) values ('$description','$total','false',$section) ";
		$run=mysqli_query($con,$insert);
		$run3=mysqli_query($con2,$insert3);
		
		if(mysqli_errno($con)==1062){
		echo "<script type='text/javascript'> alert ('මෙම ඉඩම් අංකයට අදාළව පෙර ලියපදිංචි වී ඇත.');</script>";
		}
		
		if($run){
			echo "<script type='text/javascript'> alert (' සාර්ථකව දත්ත අතුලත් කරන ලදී ');</script>";
			
		
		} else{
			echo "<script type='text/javascript'> alert (' දත්ත අතුලත් කරීම අසාර්ථක විය ');</script>";
		
		
		}
	

	
		}}
?>
		
	</body>
