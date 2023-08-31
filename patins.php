<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$P_ID = mysqli_real_escape_string($link, $_REQUEST['P_ID']);
$P_NAME = mysqli_real_escape_string($link, $_REQUEST['P_NAME']);
$DATE = mysqli_real_escape_string($link, $_REQUEST['DATE']);
$STATUS = mysqli_real_escape_string($link, $_REQUEST['STATUS']);
$COLL_ID = mysqli_real_escape_string($link, $_REQUEST['COLL_ID']);
// Attempt insert query execution
$sql = "INSERT INTO `phc_patients`(`P_ID`, `P_NAME`, `DATE`, `STATUS`,`COLL_ID`) VALUES ('$P_ID','$P_NAME','$DATE','$STATUS','$COLL_ID')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:patdisp.php')
?>