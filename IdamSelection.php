<!DOCTYPE html>


<?php 
session_start();
$con=mysqli_connect("localhost","root","","idam")or die("connection failed!");	
	
?>

<html>
	<head>
	<title> තෝරාගැනීම් </title>
	<link rel="stylesheet" href="StylesIdamaSelection.css"/>
	</head>
	<body>
	
	<form method="post" action="IdamSelection.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:selection.php");
	exit;
	}?>
		
		
	
	
	<div class='head'>
	<h1 align='center' color="black">  ඉඩම් ලියපදිංචිය  </h1>
	<ul align='center'>
	  <li><a href="IdamHome.php">නව ඉඩම් අංකයක් සහිතව ලියපදිංචිය</a></li>	
	  <li><a href= "IdamHome1.php"> සාමාන්‍ය ලියාපදිංචිය  </a></li>
	  <li><a href="IdamHome2.php"> ලියාපදිංචි තොරතුරු</a></li>
	  <li><a href="IdamPrasa.php"> ගෙවීම් තොරතුරු </a></li>

	</ul> 
	</div>
		
	
	<div id="select">
	<table align="right">
	
		<tr>
			<td class='but' >
				<a href="IdamHome.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='නව ඉඩම් අංකයක් සහිතව ලියපදිංචිය'></a>
			</td>
		</tr>
		<tr>
			<td class='but' >
				<a href="IdamHome1.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='සාමාන්‍ය ලියාපදිංචිය '></a>
			</td>
		</tr>
		<tr>
			<td class='but' >
				<a href="IdamHome2.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ලියාපදිංචි තොරතුරු' ></a>
			</td>
		</tr>
		<tr>
			<td class='but' >
				<a href="IdamPrasa.php" target="_self"  style="text-decoration:none;" target="_blank"><input  type='button' class='but1' name='regbutton' value='ගෙවීම් තොරතුරු'></a>
			</td>
		</tr>
		</table>
	</div>
	
	
	
	
	
	<div id="table1">	
	<table align="left" border width="900px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th>හැ. අංකය </th>
			<th>දු.අංකය</th>
			<th>ඉඩම් අංකය</th>
			<th> දිනය</th>
			<th>මුදල</th>
		</tr>
		<?php
			$select="select * from idam_users";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$tp=$row['TP'];
				$id=$row['ID'];
				$number=$row['RegNum'];
				$date=$row['PayDate'];
				$amount=$row['Amount'];
		?>
		<tr>
			<td><?php  echo $name?></td>
			<td><?php  echo $id?></td>
			<td><?php  echo $tp?></td>
			<td><?php  echo $number?></td>
			<td><?php  echo $date?></td>
			<td><?php  echo $amount?></td>
		</tr>
		
		<?php
			}
		?>
		
	</div>	
	</table>
		
		
	</body>
</html>