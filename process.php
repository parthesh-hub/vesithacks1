<?php 

	$emailid=$_POST['user'];
	$password=$_POST['pass'];
	$emailid=stripcslashes($emailid);
	$password=stripcslashes($password);
	$conn=mysqli_connect("localhost","root","");
	$emailid=mysqli_real_escape_string($conn,$emailid);
	$password=mysqli_real_escape_string($conn,$password);
	$db=mysqli_select_db($conn,"auditorium booking");
	$result=mysqli_query($conn,"select * from user where emailid='$emailid'and password='$password'") ;
	$row=mysqli_num_rows($result);
	if($row == 1)
	{
		header("Location:vesithack2.php");
	}
	else
	{
		echo "NOT AN AUTHORIZED USER";
		
	}
	mysqli_close($conn);
	

	?>