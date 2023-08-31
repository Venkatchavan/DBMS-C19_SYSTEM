<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$HOSPITAL_NAME = mysqli_real_escape_string($link, $_REQUEST['HOSPITAL_NAME']);
$HOSP_ID = mysqli_real_escape_string($link, $_REQUEST['HOSP_ID']);
$DOC_NAME = mysqli_real_escape_string($link, $_REQUEST['DOC_NAME']);
$DOC_ID = mysqli_real_escape_string($link, $_REQUEST['DOC_ID']);
$DOC_PHNUM = mysqli_real_escape_string($link, $_REQUEST['DOC_PHNUM']);
// Attempt insert query execution
$sql = "INSERT INTO `phc_doctors`(`HOSPITAL_NAME`, `HOSP_ID`, `DOC_NAME`, `DOC_ID`, `DOC_PHNUM`) VALUES ('$HOSPITAL_NAME','$HOSP_ID','$DOC_NAME','$DOC_ID','$DOC_PHNUM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:phc_docdisp.php')
?>