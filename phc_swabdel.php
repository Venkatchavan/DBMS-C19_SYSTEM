<?php
$username = "root";
$password = '';
$servername = "localhost";
$dbname = "C19";
$con = mysqli_connect('localhost','root');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$query="DELETE FROM `phc_swabcollectors` WHERE COLL_ID ='$_GET[rn]'";
$data=mysqli_query($conn,$query);

if ($data) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
header('location:phc_swabdisp.php');
?>