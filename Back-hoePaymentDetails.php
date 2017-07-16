<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","back_hoe")or die("connection failed!");
	$id=$_GET['run_value'];
	$id_=mysqli_real_escape_string($con,$id);
	$sel="select * from back_hoeusers WHERE ID = '$id_'";
	$run=mysqli_query($con,$sel);
	$row=mysqli_fetch_array($run);
	$name=$row['Name'];
	$id= $row['ID'];
	$address=$row['Address'];
	$tp=$row['TP'];
	$insert="insert into back_hoe_owners(Name,ID,Address,TP) values('$name','$id','$address','$tp')";
	$run=mysqli_query($con,$insert);
	
	?>
	
		
	<html>
		<head>
			<title> විස්තර අතුලත් කිරීම. </title>
			<link rel="stylesheet" href="styles.css"/>
		</head>
		<body>
				<form  target="frame" method ="post" action ="Back-hoePaymentDetails.php"></br>
					රථය ලබාගන්නා දිනය : <input type="date" name="dop"/></br></br>
					නැවත භාර දෙන දිනය : <input type="date" name="dos" /></br></br>
					දින ගණන :               <input type="number" name="nod" /></br></br>
					දිනයකට අය කරන ගාස්තුව : <input type="number" name="amt"/></br></br>
											   <input type="submit" name="sdate" value=" ඇතුලත් කිරීම"/></br>
				</form>
				
				<?php
				if(isset($_POST['sdate'])){
					echo 'winma';
					$dop=$_POST['dop'];
					$dos=$_POST['dos'];
					$nod=$_POST['nod'];
					$days=(int)$nod;
					$insert="insert into back_hoe_owners(DoP,DoS) values('$dop','$dos')";
					//$lastno="select No from back_hoe_owners order by lastmodified desc limit 1";
					//$insert="update back_hoe_owners set BNumber='B1',DoP='$dop',DoS='$dos') where No=$lastno";

					$run=mysqli_query($con,$insert);
				}
				?>
	<iframe name="frame"></iframe>
	</body>
	</html>
	
	
