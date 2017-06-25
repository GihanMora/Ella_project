<!DOCTYPE html>

<?php 
	session_start();
	$con=mysqli_connect("localhost","root","","back_hoe")or die("connection failed!");
?>

	<html>
		<head>
			<title> බැකෝ රථය පිලිබඳ තොරතුරු </title>
			<link rel="stylesheet" href="styles.css"/>
		</head>
	
		<body>
		
		<?php
		$select="select * from back_hoe_availability where BNumber='B1'"; 
		$run=mysqli_query($con,$select);
		$raw=mysqli_fetch_array($run);
		$availability=$raw['Availability'];
		if ($availability==0){
			///echo '<h1>බැකෝ රථය කුලියට දීමට ඇත.</h1>';
			
			echo ' <h1> ගිණුම තහවුරු කිරීම.</h1>
							<form method ="post" action ="Back-hoeDetails.php"></br>
							ජාතික හැදුනුම්පත් අංකය:<input type="text" name="id" /></br></br>
							<input type="submit" name="sub" value=" ඇතුලත් කිරීම"/></br>
							</form>';
							
			if(isset($_POST['sub'])){
			$share=$_POST['id'];
			$id=mysqli_real_escape_string($con,$_POST['id']);
			$sel2="select * from back_hoeusers WHERE ID = '$id'";
			$run2=mysqli_query($con,$sel2);
			$check2=mysqli_num_rows($run2);
			///$_SESSION('run_value')=$run2;
			if($check2>0){
				?>
				<h2>අනන්‍යතවය තහවුරුය</h2>
				<p><a href='Back-hoePaymentDetails.php?run_value=<?php echo $share ?>'>  රථය ලබා ගැනීම සම්බන්ද තොරතුරු    </a></p>
				<?php
				///echo"<script>window.open('Home.php','_self')</script>";
				
				/*echo '<form method ="post" action ="Back-hoeDetails.php"></br>
							rathaya labaganna dinaya : <input type="date" name="dop"/></br></br>
							nawatha bhara dena dinaya:<input type="date" name="dos" /></br></br>
							Dina ganana:<input type="text" name="dos" /></br></br>
                            <input type="submit" name="sub_date" value=" ඇතුලත් කිරීම"/></br>
					</form>';
				
				echo 'winma';
				if(isset($_POST['sub_date'])){
					echo 'wibna';
					//enter details to the data base . go the next page where calculations are done some is 
					//given. sends a mesage to the secretary and 
					echo"<script>window.open('Home.php','_self')</script>";
				}	*/
				
				
				
			}
			else{
				echo '<h1>අනන්‍යතාවය තහවුරු නැත </h2><br/>
							<h2><a href= "Back-hoeRegister.php"> නව සාමජිකත්වය<a/></h2></br>	';
				}
			}
			///$row2=mysqli_fetch_array($run2);

			
			
			
			
		}else{
			
			$select1="select * from back_hoe_owners order by No desc limit 1";
			$run1=mysqli_query($con,$select1);
			$row1=mysqli_fetch_array($run1);
			$name =$row1['Name'];
			$id=$row1['ID'];
			$tp=$row1['TP'];
			$dop=$row1['DoP'];
			$dos=$row1['DoS'];
			
			echo '<h1> බැකෝ රථය කුලියට දීමට නොමැත.<br/>අවසානයට කුලියට ගත් පුද්ගල තොරතුරු. </h1><h3>';
			
			echo 'නම  : ',$name,"<br/><br/>\n";
			echo 'හැ. අංකය : ',$id,"<br/><br/>\n";
			echo 'දු.අංකය : ',$tp,"<br/><br/>\n";
			echo 'කුලියට ගත් දිනය :  ',$dop,"<br/><br/>\n";
			echo 'නැවත භාර දෙන දිනය : ',$dos,"<br/><br/>\n</h3>";
		}
		
		?>
	
		</body>
	</html>