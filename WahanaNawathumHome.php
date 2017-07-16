<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","wahananawathuma")or die("connection failed!");
	$con1=mysqli_connect("localhost","root","","gamaya")or die("connection failed!");
?>

<html>
	<head>
	<title> වාහන  නැවතුම</title>
	<link rel="stylesheet" href="StylesWahanaNawathumaHome.css"/>
	</head>
	
	<body>
	<form method="post" action="WahanaNawathumHome.php" align="left">
	<input type="submit" name="back" value="පෙර පිටුව"/>
	</form>
	
	<?php
	if(isset($_POST['back'])){
	header("location:selection.php");
	exit;
	}?>
	
	
	
	<h1 id="hh1"> මුදල් විස්තර ඇතුලත් කිරීම </h1>

	
		<table align="left" border width="850px"  id="myTable1">
		<tr>
			<th> නම</th>
			<th> මුදල </th>
			<th>දිනය</th>
			
		</tr>
		<?php
			$select="select * from payment";
			$run=mysqli_query($con,$select);
			while($row=mysqli_fetch_array($run)){
				$name=$row['Name'];
				$amount=$row['Amount'];
				$date=$row['Date'];
				
		?>
		<tr>
			<td><?php  echo $name?></td>
			<td><?php  echo $amount?></td>
			<td><?php  echo $date?></td>
			
		</tr>
		
		<?php
			}
		?>
		
		
	</table>
	
	
	
	
	
	
	
	<form method ="post" action ="WahanaNawathumHome.php">
		<table align="right" width="500px" height="200x" id="myTable1">
				<tr>
				<td align="right"> මුදල් ගෙවූ පුද්ගලයාගේ නම:</td>
				<td>
				<input type="text"  name="name" />
				</td></br>
			</tr>
		
			<tr>
				<td align="right"> මුදල: </td>
				<td>
				<input type="number" step "0.01" name="amount" />
				</td></br>
			</tr>
			<tr>
			
		
		
			<tr>
				<td> <input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></td>
			</tr>
		</table>
	</form>
	
	

		<form method="post" action="WahanaNawathumHome.php" align="left">
		<div class="buto">
	<input type="submit" name="prasa" class="but1" value="ගෙවීම් තොරතුරු"/>
		</div>
	</form>
	
	<?php
	if(isset($_POST['prasa'])){
	header("location:WahanaNawathumPrasa.php");
	exit;
	}?>
	
	<?php
		if(isset($_POST['sub'])){
		$amount     =$_POST['amount'];
		$name       =$_POST['name'];
		$today      =date("Y-m-d");
		$true=1;
		
		$description="".$name;
		$section=" වාහන නැවතුම් මුදල් ගෙවීම";
		if(empty($name)|| empty($amount)){
			echo "<script type='text/javascript'> alert ('දත්ත නිවැරදිව අතුළත් කර නැත ');</script>";
		} else{
			$insert="insert into payment(Name,Amount,Date,Paid) values('$name','$amount','$today','$true')";
			$insert3="insert into gamaya prasa_two(vistharaya,geweema,Approved,wargaya) values ('$description','$amount','false',$section) ";
			$run=mysqli_query($con,$insert);
			$run3=mysqli_query($con2,$insert3);
			if($run){
				echo "<script type='text/javascript'> alert (' සාර්ථකව දත්ත අතුලත් කරන ලදී ');</script>";
				
			} else{
				echo "<script type='text/javascript'> alert (' දත්ත අතුලත් කරීම අසාර්ථක විය ');</script>";
			
				}

		}	
		
		}
?>
	</body>
</html>