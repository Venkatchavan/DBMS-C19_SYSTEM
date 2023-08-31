<?php

 

include 'phc_swabcon.php';

 

$P_ID = $_GET['P_ID'];

 

$q1 = " DELETE FROM `phc_patients` WHERE P_ID = $P_ID ";
$P_NAME = $_GET['P_NAME'];
mysqli_query($con, $q1);
mysqli_query($con, $q2);
mysqli_query($con, $q3);

 

header('location:display.php');

 

?>