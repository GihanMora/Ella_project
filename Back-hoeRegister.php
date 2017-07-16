<!DOCTYPE html>

<?php 
session_start();
$con1=mysqli_connect("localhost","root","","back_hoe")or die("connection failed!");	
	
?>

<html>
	<head>
	<title> ලියාපදිංචි කිරීම් </title>
	<link rel="stylesheet" href="styles.css"/>
	</head>
	
<body> 

	<h1> බැකෝ රථය ලබා ගැනීම සදහා විස්තර  ඇතුලත් කිරීම  </h1>

	<form method ="post" action ="Back-hoeRegister.php"></br>
		<table align="center" bgcolor="grey" height="300px" width="400px">
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
				<td>  <input type="date" name="dop" /></td>
			</tr>
			<tr>
			
			<tr>
				<td> නැවත භාර දෙන දිනය:</td>
				<td>  <input type="date" name="dos" /></td>
			</tr>
			<tr>
			
			
			
				<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></td>
			</tr>
		</table>
	</form>

	<?php 

	if(isset($_POST['sub'])){
		$name     =$_POST['name'];
		$id       =$_POST['id'];
		$adress   =$_POST['Adress'];
		$telephone=$_POST['Telephone'];
		
		
		$insert1="insert into back_hoeusers(Name,ID,Address,TP) values('$name','$id','$adress','$telephone')";
		
		$run=mysqli_query($con1,$insert1);
		//echo mysqli_error($con1);
		if(mysqli_errno($con1)==1062){
			echo "<script type='text/javascript'> alert ('මෙම හැදුනුම්පත් අංකයට අදාළව පෙර ලියපදිංචි වී ඇත.');</script>";
		}
		
		
		if($run){
			echo "සාර්ථකව දත්ත අතුලත් කරන ලදී";
		} else{
			"දත්ත අතුලත් කරීම අසාර්ථක විය";
			}
			
		
		mysqli_close($con1);
}
	?>
	<a href = "Back-hoeDetails.php"> Next </a>
</html>
