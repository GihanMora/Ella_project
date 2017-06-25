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

	<h1>නව සාමාජිකයකු අතුලත් කිරීම සදහා පහත විස්තර සම්පූර්ණ කරන්න</h1>

<form method ="post" action ="Back-hoeRegister.php"></br>
සම්පූර්ණ නම : <input type="text" name="name"/></br></br>
ජාතික හැදුනුම්පත් අංකය:<input type="text" name="id" /></br></br>
ලියාපදිංචි ලිපිනය:<input type="text" name="Adress" /></br></br>
දුරකතන අංකය: <input type="text" name="Telephone" /></br></br>
<input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></br>

</form>
<?php 

if(isset($_POST['sub'])){
	$name     =$_POST['name'];
	$id       =$_POST['id'];
	$adress   =$_POST['Adress'];
	$telephone=$_POST['Telephone'];
	
	
	$insert1="insert into back_hoeusers(Name,ID,Address,TP) values('$name','$id','$adress','$telephone')";
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
<a href = "Back-hoeDetails.php"> Next </a>
</html>
