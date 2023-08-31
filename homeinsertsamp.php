<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$PAT_NAME = mysqli_real_escape_string($link, $_REQUEST['PAT_NAME']);
$PAT_ID= mysqli_real_escape_string($link, $_REQUEST['PAT_ID']);
$HOME_PHNUM = mysqli_real_escape_string($link, $_REQUEST['HOME_PHNUM']);
$HOME_ADDRESS = mysqli_real_escape_string($link, $_REQUEST['HOME_ADDRESS']);
$RESULT_DATE = mysqli_real_escape_string($link, $_REQUEST['RESULT_DATE']);
// Attempt insert query execution
$sql = "INSERT INTO `phc_home`(`PAT_NAME`, `PAT_ID`, `HOME_PHNUM`, `HOME_ADDRESS`, `RESULT_DATE`) VALUES ('$PAT_NAME','$PAT_ID','$HOME_PHNUM','$HOME_ADDRESS','$RESULT_DATE')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:phc_homedisp.php')
?>