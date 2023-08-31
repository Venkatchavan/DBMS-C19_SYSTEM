<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$HOSPITAL_NAME = mysqli_real_escape_string($link, $_REQUEST['HOSPITAL_NAME']);
$HOSP_ID = mysqli_real_escape_string($link, $_REQUEST['HOSP_ID']);
 
// Attempt insert query execution
$sql = "INSERT INTO `phc_doctors`(`HOSPITAL_NAME`, `HOSP_ID`) VALUES ('$HOSPITAL_NAME','$HOSP_ID')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:hospdisp.php');
?>
