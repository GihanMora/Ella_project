<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","waterbowser")or die("connection failed!");
?>

<html>
	<head>
	<title> තෝරාගැනීම් </title>
	<link rel="stylesheet" href="StylesBackhoeSelection.css"/>
	</head>
	<body>
	<form method="post" action="WaterBowserSelection.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:selection.php");
	exit;
	}?>
		
	
		
			
	<div class='head'>
	<h2 align='center' color="black">ජල බවුසරය කුලියට ගැනීම </h2>
	<ul align='center'>
	  <li><a href= "WaterBowserDetails.php"> ජල බවුසරය කුලියට ගැනීම හා අත්තිකාරම් ගෙවීම</a></li>
	  <li><a href="WaterBowserDetails1.php"> ගෙවීම් සම්පූර්ණ කිරීම</a></li>
	  <li><a href="WaterBowserPrasa.php"> ගෙවීම් තොරතුරු</a></li>

	</ul> 
	</div>
		
	
	<div id="select">
	<table align="right">
		<tr>
			<td class='but' >
				<a href="WaterBowserDetails.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ජල බවුසරය කුලියට ගැනීම හා අත්තිකාරම් ගෙවීම'></a>
			</td>
		</tr>
		<tr>
			<td class='but' >
				<a href="WaterBowserDetails1.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ගෙවීම් සම්පූර්ණ කිරීම' ></a>
			</td>
		</tr>
		<tr>
			<td class='but' >
				<a href="WaterBowserPrasa.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ගෙවීම් තොරතුරු'></a>
			</td>
		</tr>
	</table>	
	</div>
	
	
	<div id="table1">
	<table  border width="900px"  id="myTable1"  bgcolor="#41A317">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			<th>දු.අංකය</th>
			<th>ගත් දිනය </th>
			<th> භාර දෙන දිනය</th>
		</tr>
		<?php
			$select="select * from water_bowser_owners";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$dop=$row['DoP'];
				$dos=$row['DoS'];
		?>
		<tr>
			<td><?php  echo $name?></td>
			<td><?php  echo $id?></td>
			<td><?php  echo $tp?></td>
			<td><?php  echo $dop?></td>
			<td><?php  echo $dos?></td>
		</tr>
		
		<?php
			}
		?>
		
		
	</table>
	</div>
	
	
	
			
		
		
	</body>
</html>