<?php
	$username = "root";
	$password = '';
	$wardname = $_POST['WARDNAME'];
	$wardnumber = $_POST['WNUM'];
	$conn = new mysqli('localhost','root','','C19');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT INTO ward (wardname,wardnumber) values(?,?)");
		$stmt->bind_param("si", $wardname,$wardnumber);
		$execval = $stmt->execute();
		echo $execval;
		echo ".......Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
