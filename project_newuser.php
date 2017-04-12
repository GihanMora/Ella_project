<!DOCTYPE html>

<?php 

$con=mysqli_connect("localhost","root","","registerusers")or die("connection failed!");	
	
?>

<html>
	<head>
	<title> නව ලියාපදිංචි කිරීම් </title>
	</head>
	
<body> 
<?php
	echo "නව සාමාජිකයකු අතුලත් කිරීම සදහා පහත විස්තර සම්පූර්ණ කරන්න";
?>
<form method ="post" action ="project_newuser.php"></br>
<input type="text" name="name" placeholder="සම්පූර්ණ නම"/></br></br>
<input type="text" name="ID" placeholder="ජාතික හැදුනුම්පත් අංකය"/></br></br>
<input type="text" name="Adress" placeholder="ලියාපදිංචි ලිපිනය"/></br><br>
<input type="text" name="Telephone" placeholder="දුරකතන අංකය"/></br></br>


<input type="submit" name="sub" value="නව සමාජිකයකු අතුලත් කිරීම"/></br>

</form>
<?php 

if(isset($_POST['sub'])){
	$name=$_POST['name'];
	$id=$_POST['ID'];
	$adress=$_POST['Adress'];
	$telephone=$_POST['Telephone'];
	
	
	$insert="insert into userdetails(Name,ID,Adress,Telephone) values('$name','$id','$adress','$telephone')";
	$run=mysqli_query($con,$insert);
	if($run){
		
		echo "සාර්ථකව දත්ත අතුලත් කරන ලදී";
	} else{"දත්ත අතුලත් කරීම අසාර්ථක විය";}
}
?>







</body>
</html>
