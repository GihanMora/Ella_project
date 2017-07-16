<!DOCTYPE html>

<?php
//assume the no of days and calculation rate is taken
$nod=5.00;
$amt=1500.00;
	

?>

<html>
	<head>
	<title> මුදල් අයකිරීම් තොරතුරු </title>
	<link rel="stylesheet" href="styles.css"/>
	</head>
	
	
	<body>
		<?php
		$total=$amt*$nod;
		$advance=$total/4;
		?>
		<h2> ගෙවිය යුතු මුදල් විස්තර</h2>
		
			<table width="500" bgcolor=yellow border="2">
			<tr>
				<th> මුළු මුදල</th>
				<th>අත්තිකාරම් මුදල</th>
			</tr>
			<tr>
				
				<td align="center"><?php  echo 'රු.  '.$total;?></td>
				<td align = "center"><?php echo 'රු.  '.$advance;?></td>
				
			</tr>
		</table></br></br>
		<input type="submit" name="sub" value=" අනුමැතිය ලබා ගැනීම සඳහා "/></br>
		
		
	</body>

	
	
	</html>