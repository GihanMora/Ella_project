<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","idam")or die("connection failed!");
?>

<html>
	<head>
	<title> ඉඩම් ලියාපදිංචි කිරීම</title>
	<link rel="stylesheet" href="StylesIdamaHome1.css"/>
	</head>
	
	<body>
		<form method="post" action="IdamHome1.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:IdamSelection.php");
	exit;
	}?>
	
	<h2 id="hh1"> ඉඩම් ලියාපදිංචිය </h2>
	
	<form method ="post" action ="IdamHome1.php">
		<table align="center" id="myTable" width="300px" height="100px">
		<tr>
		<td align="right"> ඉඩම් අංකය :</td>
		<td>
		<input type="text" name="RegNumber" />
		</td></br>
		</tr>
		
		<tr>
		<td> <input type="submit"  name="sub" value=" ඇතුලත් කිරීම"/> </td>
		</tr>
		</table>
	</form>
	
	<!-- write the code to take the values from the data base and display the early owner of the land and then direct for the new user
	form by deleting the early record-->
	
		<?php
							
			if(isset($_POST['sub'])){
			$share=$_POST['RegNumber'];
			$id=mysqli_real_escape_string($con,$_POST['RegNumber']);
			$sel="select * from idam_users WHERE RegNum='$id' ";
			$run=mysqli_query($con,$sel);
			$check=mysqli_num_rows($run);
			if($check>0){
				
				echo '<h2 id="hh2"> ඉඩම පෙර ලියාපදිංචි  කළ තොරතුරු </h2>';
				
			$row=mysqli_fetch_array($run);
			$name=$row['Name'];
			$id= $row['ID'];
			$address=$row['Address'];
			$tp=$row['TP'];
			$regnumber=$row['RegNum'];
			$amount=$row['Amount'];
			$date=$row['PayDate'];
			
			echo	'<table align="center" width="500px" height="270px" id="myTable">
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
						<td> ලියාපදිංචි මුදල:</td>
						<td> රු. '.$amount.'./=</td>
					</tr>
				
					<tr>
						<td> ලියාපදිංචි අංකය:</td>
						<td>'.$share.'</td>
					</tr>
				
					<tr>
						<td> ලියාපදිංචි දිනය:</td>
						<td>'.$date.'</td>
					</tr>
				
					</table>';
					
					
			$insert2="insert into idam_old_users(Name,ID,Adress,TP,Amount,PayDate,RegNum) values('$name','$id','$address','$tp','$amount','$date','$regnumber')";
			$run2=mysqli_query($con,$insert2);
			echo "<script type='text/javascript'> alert ('පෙර ඉඩම් හිමිකරුගේ දත්ත සටහන් සාර්ථකව ස්ටහන් කර ගන්නා ලදී');</script>";		
			
			
			$sel1="delete from idam_users where RegNum='$regnumber'";
			$run1=mysqli_query($con,$sel1);
			echo "<script type='text/javascript'> alert ('පෙර ඉඩම් හිමිකරුගේ ඉඩම් අංකයට අදාළ විස්තර සාර්ථකව ඉවත් කරන ලදී ');</script>";
			
			echo "<a href='IdamHome.php' align='center'> නව  ලියාපදිංචිය  </a>";
			
		
			
			
			
			
			
			
			
			
			
			
			
			
			} else {
				echo "<script type='text/javascript'> alert (' මෙම අංකයට අදාළව ඉඩමක් පෙර ලියාපදිංචි කර නොමැත');</script>";
			}
			
			}
		?>
			
	
	
	
	
	
	
	
	</body>
</html>