<?php
	include('connection.php');
	$username = $_POST['user'];
	$password = $_POST['pass'];

	$ret=mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$password'");

	$num=mysqli_fetch_array($ret);
		if($num > 0)
		{
			
			include('data.php');
			  
		}
	else
	{
		echo  "Login failed. Invalid username or password";
	}
?>
