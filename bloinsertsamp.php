<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$OFFICER_NAME = mysqli_real_escape_string($link, $_REQUEST['OFFICER_NAME']);
$OFFICER_ID = mysqli_real_escape_string($link, $_REQUEST['OFFICER_ID']);
$PH_NUM = mysqli_real_escape_string($link, $_REQUEST['PH_NUM']);
$WARD_NUM = mysqli_real_escape_string($link, $_REQUEST['WARD_NUM']);
$PAT_ID = mysqli_real_escape_string($link, $_REQUEST['PAT_ID']);
 
// Attempt insert query execution
$sql = "INSERT INTO `warroom_blo`(`OFFICER_NAME`, `OFFICER_ID`, `PH_NUM`, `WARD_NUM`,`PAT_ID`) VALUES ('$OFFICER_NAME','$OFFICER_ID','$PH_NUM','$WARD_NUM','$PAT_ID')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:blodisp.php');
?>