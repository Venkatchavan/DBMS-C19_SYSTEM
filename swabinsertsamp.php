<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$COLL_NAME = mysqli_real_escape_string($link, $_REQUEST['COLL_NAME']);
$COLL_ID = mysqli_real_escape_string($link, $_REQUEST['COLL_ID']);
$PH_NUM = mysqli_real_escape_string($link, $_REQUEST['PH_NUM']);
// Attempt insert query execution
$sql = "INSERT INTO `phc_swabcollectors`(`COLL_NAME`, `COLL_ID`, `PH_NUM`) VALUES ('$COLL_NAME','$COLL_ID','$PH_NUM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:phc_swabdisp.php')
?>