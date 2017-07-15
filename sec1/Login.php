<html>
<head><title>LogIn</title>
	<link rel="stylesheet" type="text/css" href='balapathra.css'>
</head>
<body class='body'>
	<div class='head'>
	logged in as:
	<h2 align='center'>-ඇල්ල ප්‍රාදේශීය සභාව-බලපත්‍ර ගිණුම් තැබීම</h2>
	<h4 align="center">බලපත්‍ර ගාස්තු-වෙළඳ බලපත්‍ර</h4>
		
	</div>
	
	</div>
	
	</div>
	<div id='form'>
	<form action='balapathra_gasthu-karmantha.php' method='post' >
		
			<table class='table'>
				<tr><td>නම:<input type='text' required='true' name='kname' placeholder='නම'></td></tr>
				<tr><td>ලිපිනය:<input type='text' required='true' name='kaddress' placeholder='ලිපිනය'></td></tr>
				<tr><td>බලපත්‍ර අංකය:<input type='text' required='true' name='knum' placeholder='බලපත්‍ර අංකය'></td></tr>
				
				<tr><td>ගාස්තුව:<input type='text' name='kpayment' required='true' placeholder='ගාස්තුව'></td></tr>
				<tr><td><input class='b2' type='submit' name='kenter1' value='ඇතුලත් කරන්න' required='true'></td></tr>
			</table>
			<a href="balapathra_gasthu.php" target="_self"  style="text-decoration:none;" target="_self"><input class='b1' type='button' name='regbutton' value='පෙර මෙනුවට'></a>
		
	</form>
	</div>
	<div id='form'>
		<form action='balapathra_gasthu-karmantha.php' method='post'>
			<table class='table'>
				<tr><td>නම:<input type='text' required='true'  name='name1' placeholder='නම'></td></tr>
				
				<tr><td>ලිපිනය:<input type='text' required='true' name='address1' placeholder='ලිපිනය'></td></tr>
				<tr><td>බලපත්‍ර අංකය:<input type='text' required='true' name='num1' placeholder='බලපත්‍ර අංකය'></td></tr>
				<tr><td><input class='b2' type='submit' name='register' value='ලියාපදිංචි කරන්න.' required='true'></td></tr>
			</table>
		</form>
	</div>
	</div>
</body>
</html>