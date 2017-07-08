<!DOCTYPE html>
<html>
<head>
	<title>වරිපනම්/ඇල්ල</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css" method="">
<?php 
	session_start();
	$con= mysqli_connect("localhost","root","","waripanam");
?>
</head>
<body>
	<div class="container1">
		<div id="heading">
			<h1>වරිපනම් බදු</h1>
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
			<h1>ඇල්ල ප්‍රාදේශීය කොට්ඨාශය</h1>
		</div>
	</div>
	<div class="Bottm"> 
	<div id="main_form">
		<form action="ella.php" method="post">
			<table align="left" width="400px">
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
		<tr>
			<td align="left"><strong>ගාස්තුව:</strong></td>
				<td >
					<input type="text" name="payment"  placeholder="ගාස්තුව"/>
					
				</td>
		</tr>
		<tr>
			<td align="left"><strong>අයපත් අංකය:</strong></td>
				<td >
					<input type="text" name="bill_no"  placeholder="අයපත් අංකය"/>
					
				</td>
		</tr>
		<tr>
			<td align="left"><strong>ගෙවීම් කරන වර්ෂය:</strong></td>
			<td >
				<select name="year">
					<option>2017</option>
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					<option>2025</option>
					<option>2026</option>
					<option>2027</option>
					<option>2028</option>
				</select>
				
			</td>
		</tr>
		
		<tr align="left">
			<td><strong>ගෙවීම් කරන කාර්තුව:</strong></td>
			<td>
				1 කාර්තුව :<input type="hidden" name="kar1" value="No"> 
						 <input type="checkbox" name="kar1" value="Yes">
						 </br>
				2 කාර්තුව : <input type="hidden" name="kar2" value="No">
						 <input type="checkbox" name="kar2" value="Yes">
				         </br>
				3 කාර්තුව : <input type="hidden" name="kar3" value="No">
						 <input type="checkbox" name="kar3" value="Yes">
				         </br>
				4 කාර්තුව : <input type="hidden" name="kar4" value="No">
						 <input type="checkbox" name="kar4" value="Yes">
				         </br>
						 
				         
			</td>
		</tr>
		<tr align="right">
			<td colspan="6">
				<input type="submit" name="sub" value="ඇතුලත් කරන්න">
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
		if (isset($_POST['sub'])){
			$tax_no=mysqli_real_escape_string($con,$_POST['tax_number']);
			$name=mysqli_real_escape_string($con,$_POST['name']);
			$route=mysqli_real_escape_string($con,$_POST['route']);
			$side=mysqli_real_escape_string($con,$_POST['left_right']);
			$payment=mysqli_real_escape_string($con,$_POST['payment']);
			$bill_no=mysqli_real_escape_string($con,$_POST['bill_no']);
			$month=mysqli_real_escape_string($con,$_POST['month']);
			$day=mysqli_real_escape_string($con,$_POST['day']);
			$karthuwa1=mysqli_real_escape_string($con,$_POST['kar1']);
			$karthuwa2=mysqli_real_escape_string($con,$_POST['kar2']);
			$karthuwa3=mysqli_real_escape_string($con,$_POST['kar3']);
			$karthuwa4=mysqli_real_escape_string($con,$_POST['kar4']);
			
			$insert_payment="insert into payment_details(tax_no,name,route,side,payment,bill_number,month,karthuwa1,karthuwa2,karthuwa3,karthuwa4) 
			values('$tax_no','$name','$route','$side','$payment','$bill_no','$month','$karthuwa1','$karthuwa2','$karthuwa3','$karthuwa4')";
			$run=mysqli_query($con,$insert_payment);
			
			
			if($run){
				if($_POST['kar1']== "Yes" && $_POST['kar2']== "No" && $_POST['kar3']== "No" && $_POST['kar4']== "No") {
					if($_POST['day']<32 && $_POST['month']== "ජනවාරි"){
						echo"<script>alert('Suceed!..discount 1 granted')</script>";
					}
					else{
						
					}
				}
				elseif($_POST['kar2']== "Yes" && $_POST['kar1']== "No" && $_POST['kar3']== "No" && $_POST['kar4']== "No") {
					if($_POST['day']<31 && $_POST['month']== "අප්‍රේල්"){
						echo"discount 2 granted";
					}
					else{
						
					}
				}
				elseif($_POST['kar3']== "Yes" && $_POST['kar1']== "No" && $_POST['kar2']== "No" && $_POST['kar4']== "No") {
					if($_POST['day']<32 && $_POST['month']== "ජූලි"){
						echo"discount 3 granted";
					}
				}
				elseif($_POST['kar4']== "Yes" && $_POST['kar1']== "No" && $_POST['kar2']== "No" && $_POST['kar3']== "No") {
					if($_POST['day']<32 && $_POST['month']== "ඔක්තෝම්බර්"){
						echo"discount 4 granted";
					}
					else{
						
					}
				}
				elseif($_POST['kar1']== "Yes" && $_POST['kar2']== "Yes" && $_POST['kar3']== "Yes" && $_POST['kar4']== "Yes") {
					if($_POST['day']<32 && $_POST['month']== "ජනවාරි"){
						echo"yearly discount granted";
					}
					else{
						
					}
				}
					?>
	
	<?php
		 if (isset($_POST['reg'])){
			$user_number=mysqli_real_escape_string($con,$_POST['reg_tax_number']);
			$user_value=mysqli_real_escape_string($con,$_POST['reg_yearly_value']);
			$user_name=mysqli_real_escape_string($con,$_POST['reg_name']);
			$user_route=mysqli_real_escape_string($con,$_POST['reg_route']);
			$user_side=mysqli_real_escape_string($con,$_POST['reg_left_right']);
			
			$tax_term_user="SELECT tax_term FROM registered_users";
			
			$insert="insert into registered_users(tax_number,yearly_value,tax_term,name,route,side) values('$user_number','$user_value','$user_value*$tax_term_user','$user_name',
			'$user_route','$user_side')";
			$insert_update_details="insert into update_details(name,route,side,yearly_tax) values('$user_name','$user_route','$user_side','$user_value')";
			$run=mysqli_query($con,$insert);
			$run_update=mysqli_query($con,$insert_update_details);
			
			if($run && $run_update){
				echo"<script>alert('ළියාපදිංචි කිරීම සාර්ථකයි')</script>";
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