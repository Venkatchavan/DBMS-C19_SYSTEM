<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", '', "C19");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 

$EMP_NAME = $_POST['EMP_NAME'];
 $EMP_ID = $_POST['EMP_ID'];
 $PH_NUM = $_POST['PH_NUM'];
 $WARD_NUM = $_POST['WARD_NUM'];
 $sql = "INSERT INTO `warroom_employees`(`EMP_NAME`, `EMP_ID`, `PH_NUM`, `WARD_NUM`) VALUES ('$EMP_NAME','$EMP_ID','$PH_NUM','$WARD_NUM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
header('location:empdisp.php')
?>