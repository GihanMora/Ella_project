<!DOCTYPE html>

<?php 
session_start();
$con1=mysqli_connect("localhost","root","","tiper")or die("connection failed!");	
	
?>

<html>
	<head>
	<title> ලියාපදිංචි කිරීම් </title>
	<link rel="stylesheet" href="styles.css"/>
	</head>
	
<body> 

	<h1>නව සාමාජිකයකු අතුලත් කිරීම සදහා පහත විස්තර සම්පූර්ණ කරන්න</h1>

	<form method ="post" action ="TiperRegister.php"></br>
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
	
	
	$insert1="insert into tiper_users(Name,ID,Address,TP) values('$name','$id','$adress','$telephone')";
	///echo $con1;
	
	$run=mysqli_query($con1,$insert1);
	echo mysqli_error($con1);
	
	
	if($run){
		echo "සාර්ථකව දත්ත අතුලත් කරන ලදී";
	} else{
		"දත්ත අතුලත් කරීම අසාර්ථක විය";
		}
		
	
	mysqli_close($con1);
}
?>
<a href = "TiperDetails.php"> Next </a>
</html>
