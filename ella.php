<?php
session_start();
if (!$_SESSION['username'] && !$_SESSION['password']){
		header("location:/secretary/login.php");
	}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title>වරිපනම්/ඇල්ල</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css" method="">
<?php 
	$con= mysqli_connect("localhost","root","","waripanam");
?>
</head>
<body>
	<div class="container1">
		<div id="heading">
			<h4 align="left">logged in as:<?php echo $_SESSION['username'];?><a href="/secretary/Logout.php"> [Logout]</a><h4>
			<h1 align="center">වරිපනම් බදු</h1>
		</div>
	</div>
	<div class="container">
			<ul>
			<li><a href="ella.php">ඇල්ල</a></li>
			<li><a href="ballaketuwa.php">බල්ලකෙටුව</a></li>
			<li><a href="demodara.php">දෙමෝදර</a></li>
			<li><a href="halpe.php">හල්පේ</a></li>
			<li><a href="bidunuwewa.php">බිදුණු වැව- මිහිඳු මාවත</a></li>
			<li><a href="heeloya.php">හීල්ඔය පාර</a></li>
			</ul>
	</div>
	
	<div class="container1">
		<div id="heading">
			<h1 align="center">ඇල්ල ප්‍රාදේශීය කොට්ඨාශය</h1>
		</div>
	</div>
	<div class="Bottm"> 
	<div id="main_form">
		<form action="ella.php" method="post">
			<table align="left" width="600px">
				<tr>
					<td>
						<h1>ගෙවීම්</h1>
					</td>
				</tr>
				<tr>
					<td>
						</br>
					</td>
				</tr>
				<tr>
					<td align="left"><strong>වරිපනම් අංකය: </strong></td>
					<td >
						<input type="text" name="tax_number" placeholder="වරිපනම් අංකය"  Required="required"/>
					</td>
				</tr>
				<tr>
					<td align="left"><strong>නම:</strong></td>
					<td >
						<input type="text" name="name" placeholder="නම" />
					</td>
				</tr>
			<tr>
			<td align="left"><strong>මාර්ගය:</strong></td>
			<td >
				<select name="route">
					<option>ඇල්ල බණ්ඩාරවෙල පාර</option>
					<option>ඇල්ල බල්ලකෙටුව පාර</option>
					<option>ඇල්ල වැල්ලවාය පාර</option>
					<option>ඇල්ල දුම්රියපොල පාර</option>
					<option>ඇල්ල පොලිසිය පාර</option>
				</select>
				<select name="left_right">
					<option>වම</option>
					<option>දකුණ</option>
					
				</select>
			</td>
		</tr>
	
		
		
		<tr align="right">
			<td colspan="6">
				<input type="submit" name="verify" value="තහවුරු කරන්න">
			</td>
		</tr>
		</table>
			
		</form>
	</div>
	

	
	
	
	<div id="main_form">
		<form action="ella.php" method="post">
			
			<table align="right" width="450px">
			<tr>
				<td>
					<h1>ලියාපදිංචි කිරීම්</h1>
				</td>
			</tr>
			<tr>
					<td>
						</br>
					</td>
				</tr>
				<tr>
					<td align="left"><strong>වරිපනම් අංකය: </strong></td>
					<td >
						<input type="text" name="reg_tax_number" placeholder="වරිපනම් අංකය" />
					</td>
				</tr>
				<tr>
					<td align="left"><strong>වාර්ෂික වටිනාකම : </strong></td>
					<td >
						<input type="text" name="reg_yearly_value" placeholder="වාර්ෂික වටිනාකම " />
					</td>
				</tr>
				<tr>
					<td align="left"><strong>නම:</strong></td>
					<td >
						<input type="text" name="reg_name" placeholder="නම" />
					</td>
				</tr>
			<tr>
			<td align="left"><strong>මාර්ගය:</strong></td>
			<td >
				<select name="reg_route">
					<option>ඇල්ල බණ්ඩාරවෙල පාර</option>
					<option>ඇල්ල බල්ලකෙටුව පාර</option>
					<option>ඇල්ල වැල්ලවාය පාර</option>
					<option>ඇල්ල දුම්රියපොල පාර</option>
					<option>ඇල්ල පොලිසිය පාර</option>
				</select>
				<select name="reg_left_right">
					<option>වම</option>
					<option>දකුණ</option>
					
				</select>
			</td>
		</tr>
		<tr align="right">
			<td colspan="6">
				<input type="submit" name="reg" value="ලියාපදිංචි කරන්න">
			</td>
		</tr>
		</table>
			</form>
		
	</div>
		<div id="main_form">
		<form action="ella.php" align="center" method="post">
		<table align="right" width="350px" height="200px">
		<tr>
			<td>
				<input type="submit" name="view_pay_details" value="View Payment Details">
			</td>
		</tr>
		
		</table>
		</form>
	</div>
	
		</div>
		<?php
			$tax_term_user="SELECT * FROM basic_details WHERE id=1";
			$tax_term_user_run = mysqli_query($con,$tax_term_user);
		
			$row=mysqli_fetch_array($tax_term_user_run);
		    $percentage_tax=$row['percentage_tax'];
			$yearly_discount=$row['yearly_discount'];
			$monthly_discount=$row['monthly_discount'];
			
		?>
		
			<?php
		 if (isset($_POST['reg'])){
			$user_number=mysqli_real_escape_string($con,$_POST['reg_tax_number']);
			$user_value=mysqli_real_escape_string($con,$_POST['reg_yearly_value']);
			$user_name=mysqli_real_escape_string($con,$_POST['reg_name']);
			$user_route=mysqli_real_escape_string($con,$_POST['reg_route']);
			$user_side=mysqli_real_escape_string($con,$_POST['reg_left_right']);
			
			
			$tax_val_term=($percentage_tax* $user_value)/4;
			
			$insert="insert into registered_users(tax_number,yearly_value,tax_term,name,route,side,hinga,wadipura_payments) values('$user_number','$user_value','$tax_val_term','$user_name',
			'$user_route','$user_side','0','0')";
			$run=mysqli_query($con,$insert);
			
			$insert_update_details="insert into update_details(name,tax_number,route,side,yearly_tax,year,jan,feb,mar,apr,may,jun,jul,aug,sep,oct,nov,dece) values('$user_name','$user_number','$user_route','$user_side','$user_value','0','0','0','0','0','0','0','0','0','0','0','0','0')";
			$run_update=mysqli_query($con,$insert_update_details);
			
			
			if($run && $run_update){
				echo"<script>alert('ළියාපදිංචි කිරීම සාර්ථකයි')</script>";
			}
		 }
	?>
	
		<?php
		if (isset($_POST['verify'])){
			$tax_no=mysqli_real_escape_string($con,$_POST['tax_number']);
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$route=mysqli_real_escape_string($con,$_POST['route']);
			$side=mysqli_real_escape_string($con,$_POST['left_right']);
		
			
			$_SESSION['tax_num']=$tax_no;
			$_SESSION['root']=$route;
			$_SESSION['sidesel']=$side;
			$_SESSION['nama']=$name;
			
			$sel= "select * from registered_users where tax_number='$tax_no' AND name='$name' AND route='$route' AND side='$side'";
			$run=mysqli_query($con,$sel);
			$check= mysqli_num_rows($run);
			
			if($check==0){
				echo"<script>alert('User not registered .Try again!')</script>";
				exit();
				
			}
			
			else{
				//$_SESSION['user_email']=$user_email;
				echo "<script>window.open('ellapay.php','_self')</script>";	
				
			}
			
			
			
		}
		?>
	

	
	

	<?php 
		if(isset($_POST['view_pay_details'])){
			echo "<script>window.open('database.php','_self')</script>";
		}
	?>
	
	</body>
</html>
<?php } ?>