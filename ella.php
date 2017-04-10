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
						<input type="text" name="tax_number" placeholder="වරිපනම් අංකය" />
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
			<td align="left"><strong>ගෙවීම් කරන දිනය:</strong></td>
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
				<select name="month" placeholder="කාර්තුව">
					<option>ජනවාරි</option>
					<option> පෙබරවාරි</option>
					<option>මාර්තු</option>
					<option>අප්‍රේල්</option>
					<option>මැයි</option>
					<option>ජූනි</option>
					<option>ජූලි</option>
					<option>අගෝස්තු</option>
					<option>සැප්තැම්බර්</option>
					<option>ඔක්තෝම්බර්</option>
					<option>නොවැම්බර්</option>
					<option>දෙසැම්බර්</option>	
				</select>
				<select name="day" placeholder="දිනය">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>	
					<option>13</option>	
					<option>14</option>	
					<option>15</option>	
					<option>16</option>	
					<option>17</option>	
					<option>18</option>	
					<option>19</option>	
					<option>20</option>	
					<option>21</option>
					<option>22</option>	
					<option>23</option>
					<option>24</option>	
					<option>25</option>	
					<option>26</option>	
					<option>27</option>	
					<option>28</option>	
					<option>29</option>
					<option>30</option>	
					<option>31</option>		
				</select>
			</td>
		</tr>
		
		<tr align="left">
			<td><strong>ගෙවීම් කරන කාර්තුව:</strong></td>
			<td>
				<select name="karthuwa">
					<option> 1 කාර්තුව</option>
					<option> 2 කාර්තුව</option>
					<option> 3 කාර්තුව</option>
					<option> 4 කාර්තුව</option>
				</select>
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
			$karthuwa=mysqli_real_escape_string($con,$_POST['karthuwa']);
			
			$insert_payment="insert into payment_details(tax_no,name,route,side,payment,bill_number,month,karthuwa) 
			values('$tax_no','$name','$route','$side','$payment','$bill_no','$month','$karthuwa')";
			$run=mysqli_query($con,$insert_payment);
			
			if($run){
				echo"<script>alert('ඇතුලත් කිරීම සාර්ථකයි')</script>";
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
			
			$insert="insert into registered_users(tax_number,yearly_value,name,route,side) values('$user_number','$user_value','$user_name',
			'$user_route','$user_side')";
			$run=mysqli_query($con,$insert);
			
			if($run){
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