<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$PAT_NAME= mysqli_real_escape_string($link, $_REQUEST['PAT_NAME']);
$PAT_ID = mysqli_real_escape_string($link, $_REQUEST['PAT_ID']);
$PAT_PHNUM = mysqli_real_escape_string($link, $_REQUEST['PAT_PHNUM']);
$PATS_ID = mysqli_real_escape_string($link, $_REQUEST['PATS_ID']);
$BED_NUM = mysqli_real_escape_string($link, $_REQUEST['BED_NUM']);
$TREATEDBY = mysqli_real_escape_string($link, $_REQUEST['TREATEDBY']);
$RESULT_DATE = mysqli_real_escape_string($link, $_REQUEST['RESULT_DATE']);
 
// Attempt insert query execution
$sql = "INSERT INTO `phc_hospital`(`PAT_NAME`, `PAT_ID`, `PAT_PHNUM`, `BED_NUM`, `PATS_ID`, `TREATEDBY`, `RESULT_DATE`) VALUES ('$PAT_NAME','$PAT_ID','$PAT_PHNUM','$PATS_ID','$BED_NUM','$TREATEDBY','$RESULT_DATE')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:phc_hospdisp.php')
?>