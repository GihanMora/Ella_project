<?php
session_start();
if (!$_SESSION['username'] && !$_SESSION['password']){
		header("location:/secretary/login.php");
	}
else{
?>
<html>
<head>
	<title>වරිපනම්</title>
	<link rel="stylesheet" href="stylesheet.css" type="text/css" method="">
</head>
<body>
	<div class="container1">
	
	<ul>
		<h4 align="left">logged in as:<?php echo $_SESSION['username'];?><a href="/secretary/Logout.php"> [Logout]</a><h4>
		<h1 align="center">වරිපනම්<h1>
	</ul>
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
</body>
</html>
<?php } ?>