<?php
$servername = "localhost";
$username = "root";
$password = "password";

$connection = mysqli_connect('localhost', 'root', 'password','project');

if(mysqli_connect_errno()){
	die('database connection dawn');
}
else{
	echo "connection success";
}

?>

<?php
	$query="select pay_unit max(id) from jala_sapayum";
	$result=mysqli_query($connection,$query);
	
	$bill = $result*10;
	$query1="UPDATE jala_sapayum SET bill = $bill where id=max(id)";
		$result1=mysqli_query($connection,$query1);
		
		if($result1){
			echo "succuss";
		}
	

?>