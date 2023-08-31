<?php
$link = mysqli_connect("localhost", "root", "", "C19");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$WARDNAME = mysqli_real_escape_string($link, $_REQUEST['WARDNAME']);
$WNUM = mysqli_real_escape_string($link, $_REQUEST['WNUM']);
$sql = "INSERT INTO `ward`(`WARDNAME`, `WNUM`) VALUES ('$WARDNAME', '$WNUM')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
header('location:warddisp.php');
?>
