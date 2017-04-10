<!DOCTYPE html>
<html>
	<head>
		<title>Anlaysis of the data</title>
		<?php 
			$con= mysqli_connect("localhost","root","","waripanam");
		?>
		<style>
			table{
				align:center;
				color:green;
				padding:10px;
				width:1000px;
				background:lightblue;
			}
			th{
				border:2px solid black;
			}
		</style>
	</head>
	<body>
		<table align="center">
			<tr align="center">
				<td colspan="8"><h2>Details of the payments</h2></td>
			</tr>
			<tr>
				<th>අයපත් අංකය</th>
				<th>නම</th>
				<th>වරිපනම් අංකය</th>
				<th>මාර්ගය</th>
				<th>වම/දකුණ</th>
				<th>මාසය</th>
				<th>කාර්තුව</th>
				<th>ගාස්තුව</th>
			</tr>
	

		<?php
		$sel="select * from payment_details";
		$run=mysqli_query($con,$sel);
		
		
		$i=0;
		while($row=mysqli_fetch_array($run)){
			$tax_no=$row['tax_no'];
			$name=$row['name'];
			$route=$row['route'];
			$side=$row['side'];
			$payment=$row['payment'];
			$bill_no=$row['bill_number'];
			$month=$row['month'];
			$karthuwa=$row['karthuwa'];
			$i++;
		?>	
		<tr align="center">
			<td><?php echo $bill_no; ?></td>
			<td><?php echo $name; ?></td>
			<td><?php echo $tax_no; ?></td>
			<td><?php echo $route; ?></td>
			<td><?php echo $side;?></td>
			<td><?php echo $month;  ?></td>
			<td><?php echo $karthuwa; ?></td>
			<td><?php echo $payment; ?></td>
		</tr>
		<?php } ?>
		</table>
		<div>
			<form align="center" method="post">
			<input type="submit" name="back" value="පෙර මෙනුවට"/>
			</form>
		</div>
		<?php 
			if (isset($_POST['back'])){
				echo"<script>window.open('ella.php','_self')</script>";
			}
		?>
	</body>
</html>