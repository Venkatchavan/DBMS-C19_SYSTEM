<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$EMP_NAME = mysqli_real_escape_string($link, $_REQUEST['EMP_NAME']);
$EMP_ID = mysqli_real_escape_string($link, $_REQUEST['EMP_ID']);
$PH_NUM = mysqli_real_escape_string($link, $_REQUEST['PH_NUM']);
$EMP_NUM = mysqli_real_escape_string($link, $_REQUEST['WARD_NUM']);
 
// Attempt insert query execution
$sql = "INSERT INTO `warroom_employees`(`EMP_NAME`, `EMP_ID`, `PH_NUM`, `WARD_NUM`) VALUES ('$EMP_NAME','$EMP_ID','$PH_NUM','$EMP_NUM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:empdisp.php')
?>