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
		<h4 align="left">logged in as:<?php echo $_SESSION['username'];?><a href="/secretary/Logout.php"> [Logout]</a><h4>
		<h1 align="center">වරිපනම් බදු</h1>
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
		<h1 align="center">ඇල්ල ප්‍රාදේශීය කොට්ඨාශය</h1>
	</div>
	<div class="Bottmpay"> 
	<div id="main_form">
		<form action="ellapay.php" method="post">
			<tr>
					<td>
						<?php
							$tax_no=$_SESSION['tax_num'];
							$name=$_SESSION['nama'];
							$route=$_SESSION['root'];
							$side=$_SESSION['sidesel'];
							
							$values="SELECT * FROM registered_users WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
							$val=mysqli_query($con,$values);
							$row=mysqli_fetch_array($val);
							
							$tax_term=$row['tax_term'];
							$yearly_tax=$row['yearly_value'];
						?>
	
							<h2>වරිපනම් අංකය :<?php echo $tax_no?><h2>
							<h2>නම :<?php echo $name?><h1>
							<h2>මාර්ගය :<?php echo $route ,",", $side?><h2>
							<h2>වාර්ෂික වටිනාකම : Rs.<?php echo $yearly_tax?><h2>
							<h2>වාරිකයක මුදල :  Rs.<?php echo $tax_term?><h2>
					</td>
				</tr>
			<table align="left" width="350px">
				
				<tr>
					<td>
						</br>
					</td>
				</tr>
				<tr>
			<td>
				<br>
			</td>
		</tr>
				<tr>
					<td align="left"><strong>ගාස්තුව:</strong></td>
						<td>
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
		<tr>
			<td>
				<br>
			</td>
		</tr>
		<tr align="right">
			<td colspan="8">
				<input type="submit" name="sub" value="ඇතුලත් කරන්න">
			</td>
		</tr>
		</table>

			
		<table align="center">
			<tr align="center">
				<td colspan="15"><h2>පාරිභෝගිකයාගේ ගෙවීම්</h2></td>
			</tr>
			<tr>
				<th>වර්ෂය</th>
				<th>1 කාර්තුව</th>
				<th>2 කාර්තුව</th>
				<th>3 කාර්තුව</th>
				<th>4 කාර්තුව</th>
			</tr>
	

		
		
		<?php
		$sel="select * from update_details WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
		$run=mysqli_query($con,$sel);
		
		
		$i=0;
		while($row=mysqli_fetch_array($run)){
			$year=$row['year'];
			$karthuwa1=$row['1_karthuwa'];
			$karthuwa2=$row['2_karthuwa'];
			$karthuwa3=$row['3_karthuwa'];
			$karthuwa4=$row['4_karthuwa'];
			$i++;
		?>	
		<tr align="center">
			<td><?php echo $year; ?></td>
			<td><?php echo $karthuwa1; ?></td>
			<td><?php echo $karthuwa2; ?></td>
			<td><?php echo $karthuwa3; ?></td>
			<td><?php echo $karthuwa4; ?></td>
		</tr>
		<?php } ?>
		</table>
		</form>
		</div>
		

	
		<div id="main_form">
		<form>
		<table align="right" width="350px" height="2px">
			<tr>
				<th>හිඟ</th>
				<th>ඉදිරියට ගෙනා ශේෂය</th>
			</tr>
	

		
		
		<?php
		$sel="select * from registered_users WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
		$run=mysqli_query($con,$sel);
		
		
		$i=0;
		while($row=mysqli_fetch_array($run)){
			$hinga=$row['hinga'];
			$wadipura_payments=$row['wadipura_payments'];
			$i++;
		?>	
		<tr align="center">
			<td><?php echo $hinga; ?></td>
			<td><?php echo $wadipura_payments; ?></td>
			
		</tr>
		<?php } ?>
		
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
		if (isset($_POST['sub'])){
			
			$payment=mysqli_real_escape_string($con,$_POST['payment']);
			$bill_no=mysqli_real_escape_string($con,$_POST['bill_no']);
			$month=mysqli_real_escape_string($con,Date("M"));
			$year=mysqli_real_escape_string($con,$_POST['year']);
			$karthuwa1=mysqli_real_escape_string($con,$_POST['kar1']);
			$karthuwa2=mysqli_real_escape_string($con,$_POST['kar2']);
			$karthuwa3=mysqli_real_escape_string($con,$_POST['kar3']);
			$karthuwa4=mysqli_real_escape_string($con,$_POST['kar4']);
			
			//echo $tax_no;
			
			$values="SELECT * FROM registered_users WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
			$val=mysqli_query($con,$values);
			$row=mysqli_fetch_array($val);
			
			
			$tax_term=$row['tax_term'];
			$wadi_payments=$row['wadipura_payments'];
			
			//echo $tax_term;
			
			/*$get_updated_details= "SELECT MAX(year) FROM update_details WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
			$up_val=mysqli_query($con,$get_updated_details);
			
			
			$up_rows=mysqli_fetch_array($up_val);
			$recieved_year=$up_rows['year'];
			
			echo $recieved_year;*/
			
			$get_up_details="SELECT year FROM update_details WHERE (tax_number='$tax_no' AND route='$route' AND side='$side')";
			$get_updated_details=mysqli_query($con,$get_up_details);
			$column_years= array();
			while($row = mysqli_fetch_array($get_updated_details)){
				array_push($column_years,$row['year']);
			}
			//echo $column_years[1];
			$recieved_year=0;
			$length=count($column_years);
			$i=0;
			while($i<$length){
				if($column_years[$i]==$year) {
					$recieved_year=$column_years[$i];
					break;
					
				}
				else if($column_years[$i]==0){
					$update_row="UPDATE update_details SET year='$year' WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
					mysqli_query($con,$update_row);
					$recieved_year=$year;
					break;
				}
				else{
					$i=$i+1;
				}
			}
			if($recieved_year==0){
				$insert_update_details="insert into update_details(name,tax_number,route,side,yearly_tax,year) values('$name','$tax_no','$route','$side','$payment','$year')";
				mysqli_query($con,$insert_update_details);
				$recieved_year=$year;
			}
			echo $recieved_year;
			$karthu=array("$karthuwa1","$karthuwa2","$karthuwa3","$karthuwa4");
			$table_karthu=array("1_karthuwa","2_karthuwa","3_karthuwa","4_karthuwa");
			
			
			$i=0;
			//echo $table_karthu[$i];
			while($i<4){
				if($karthu[$i]=="Yes"){
						$update_row="UPDATE update_details SET $table_karthu[$i]='Yes' WHERE tax_number='$tax_no' AND route='$route' AND side='$side' AND year='$recieved_year'";
						mysqli_query($con,$update_row);
						$i=$i+1;
				}
				else{
					$i=$i+1;
					/*if($recieved_year==$year){
						$update_row="UPDATE update_details SET $table_karthu[$i]='No' WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
						$i=$i+1;
						
					}
					else{
						$update_row="UPDATE update_details SET year='$year',$table_karthu[$i]='No' WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
						$i=$i+1;
					}
					mysqli_query($con,$update_row);*/
				}
			}
			
			$discountval=0;
			$wadipura_payments=0;
			if($_POST['kar1']== "Yes" && $_POST['kar2']== "No" && $_POST['kar3']== "No" && $_POST['kar4']== "No") {
				if(Date("M")=="Jan" &&  Date("Y")==$year){
					echo"<script>alert('Suceed!..discount 1 granted')</script>";
					$discountval=$tax_term*$monthly_discount;
					if($payment>$tax_term){
							$wadipura_payments=$payment-($tax_term+$discountval);
						}
					else{
						$wadipura_payments=0;
					}
				}
					
				else{
					$discountval==0;
					if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			elseif($_POST['kar2']== "Yes" && $_POST['kar1']== "No" && $_POST['kar3']== "No" && $_POST['kar4']== "No") {
		if((Date("M")=="Apr" || Date("M")=="Jan" || Date("M")=="Feb" || Date("M")=="Mar") && Date("Y")==$year){
					echo"discount 2 granted";
					$discountval=$tax_term*$monthly_discount;
					if($payment>$tax_term){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			elseif($_POST['kar3']== "Yes" && $_POST['kar1']== "No" && $_POST['kar2']== "No" && $_POST['kar4']== "No") {
				if(Date("M")!="Aug" && Date("M")!="Sep"  && Date("M")!="Oct" && Date("M")!="Nov" && Date("M")!="Dec" && Date("Y")==$year){
					echo"discount 3 granted";
					$discountval=$tax_term*$monthly_discount;
					if($payment>$tax_term){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
					
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			elseif($_POST['kar4']== "Yes" && $_POST['kar1']== "No" && $_POST['kar2']== "No" && $_POST['kar3']== "No") {
				if(Date("M")!="Nov" && Date("M")!="Dec" && Date("Y")==$year){
					echo"discount 4 granted";
					echo "<script>alert('discount 4 granted')</script>";
					$discountval=$tax_term*$monthly_discount;
					if($payment>$tax_term){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
					
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			elseif($_POST['kar1']== "Yes" && $_POST['kar2']== "Yes" && $_POST['kar3']== "Yes" && $_POST['kar4']== "Yes") {
				if(Date("M")=="Jun" &&  Date("Y")==$year){
					echo"yearly discount granted";
					$discountval=$yearly_discount*$tax_term*4.0;
					if($payment>($tax_term*4)){
							$wadipura_payments=$payment-(($tax_term*4)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>($tax_term*4)){
						$wadipura_payments=$payment-($tax_term*4);
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			elseif($_POST['kar1']== "Yes" && $_POST['kar2']== "Yes" && $_POST['kar3']== "No" && $_POST['kar4']== "No") {
				if(Date("M")=="Jan" &&  Date("Y")==$year){
					echo" discount for two months granted";
					$discountval=$monthly_discount*$tax_term*2;
					if($payment>($tax_term*2-$discountval)){
							$wadipura_payments=$payment-(($tax_term*2)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="Feb" || Date("M")=="Mar" || Date("M")=="Apr") &&  Date("Y")==$year){
					echo"discount for one month granted";
					$discountval=$monthly_discount*$tax_term;
					if($payment>($tax_term-$discountval)){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			
			elseif($_POST['kar1']== "Yes" && $_POST['kar2']== "Yes" && $_POST['kar3']== "Yes" && $_POST['kar4']== "No") {
				if(Date("M")=="Jan" &&  Date("Y")==$year){
					echo" discount for three months granted";
					$discountval=$monthly_discount*$tax_term*3;
					if($payment>($tax_term*3-$discountval)){
							$wadipura_payments=$payment-(($tax_term*3)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="Feb" || Date("M")=="Mar" || Date("M")=="Apr")&&  Date("Y")==$year){
					echo"discount for two month granted";
					$discountval=$monthly_discount*$tax_term*2;
					if($payment>($tax_term*2-$discountval)){
							$wadipura_payments=$payment-($tax_term*2-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="May" || Date("M")=="Jun" || Date("M")=="Jul")&&  Date("Y")==$year){
					echo"discount for one month granted";
					$discountval=$monthly_discount*$tax_term;
					if($payment>($tax_term-$discountval)){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			
			elseif($_POST['kar1']== "No" && $_POST['kar2']== "Yes" && $_POST['kar3']== "Yes" && $_POST['kar4']== "No") {
				if(Date("M")=="Apr" &&  Date("Y")==$year){
					echo" discount for two months granted";
					$discountval=$monthly_discount*$tax_term*2;
					if($payment>($tax_term*2-$discountval)){
							$wadipura_payments=$payment-(($tax_term*2)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="May" || Date("M")=="Jun" || Date("M")=="Jul")&&  Date("Y")==$year){
					echo"discount for one month granted";
					$discountval=$monthly_discount*$tax_term;
					if($payment>($tax_term-$discountval)){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			
				elseif($_POST['kar1']== "No" && $_POST['kar2']== "Yes" && $_POST['kar3']== "Yes" && $_POST['kar4']== "Yes") {
				if(Date("M")=="Apr" &&  Date("Y")==$year){
					echo" discount for three months granted";
					$discountval=$monthly_discount*$tax_term*3;
					if($payment>($tax_term*3-$discountval)){
							$wadipura_payments=$payment-(($tax_term*3)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="May" || Date("M")=="Jun" || Date("M")=="Jul")&&  Date("Y")==$year){
					echo"discount for two month granted";
					$discountval=$monthly_discount*$tax_term*2;
					if($payment>($tax_term*2-$discountval)){
							$wadipura_payments=$payment-($tax_term*2-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="Aug" || Date("M")=="Sep" || Date("M")=="Oct")&&  Date("Y")==$year){
					echo"discount for one month granted";
					$discountval=$monthly_discount*$tax_term;
					if($payment>($tax_term-$discountval)){
							$wadipura_payments=$payment-($tax_term-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			
			elseif($_POST['kar1']== "No" && $_POST['kar2']== "No" && $_POST['kar3']== "Yes" && $_POST['kar4']== "Yes") {
				if(Date("M")=="Jul" &&  Date("Y")==$year){
					echo" discount for two months granted";
					$discountval=$monthly_discount*$tax_term*2;
					if($payment>($tax_term*2-$discountval)){
							$wadipura_payments=$payment-(($tax_term*2)-$discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else if((Date("M")=="Aug" || Date("M")=="Sep" || Date("M")=="Oct")&&  Date("Y")==$year){
					echo"discount for one month granted";
					$discountval=$monthly_discount*$tax_term;
					if($payment>($tax_term-$discountval)){
							$wadipura_payments=$payment-($tax_term- $discountval);
						}
					else{
						$wadipura_payments=0;
					}
										
				}
				else{
						$discountval=0;
						if($payment>$tax_term){
						$wadipura_payments=$payment-$tax_term;
					}
					else{
						$wadipura_payments=0;
					}
				}
			}
			
			else{
				$discountval=0;
				$wadipura_payments=0;
			}
			
			$insert_payment="insert into payment_details(tax_no,name,route,side,payment,discount_val,bill_number,month,karthuwa1,karthuwa2,karthuwa3,karthuwa4) 
					values('$tax_no','$name','$route','$side','$payment','$discountval','$bill_no','$month','$karthuwa1','$karthuwa2','$karthuwa3','$karthuwa4')";
					mysqli_query($con,$insert_payment);
				
			echo $wadi_payments;
				$wadipura_payments= $wadipura_payments+$wadi_payments;
			$up_reg="UPDATE registered_users SET wadipura_payments='$wadipura_payments' WHERE tax_number='$tax_no' AND route='$route' AND side='$side'";
					mysqli_query($con,$up_reg);
					echo "<script>alert('ඇතුලත් කිරීම සාර්ථකයි')</script>";
			}
					?>
	 
	</body>
</html>
<?php } ?>