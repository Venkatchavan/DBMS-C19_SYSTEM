<?php

include 'phc_swabcon.php';

if(isset($_POST['done'])){

 $OFFICER_NAME = $_POST['OFFICER_NAME'];
 $OFFICER_ID = $_POST['OFFICER_ID'];
 $PH_NUM = $_POST['PH_NUM'];
 $BLO_NUM = $_POST['BLO_NUM'];
 $q = " INSERT INTO `warroom_blo`(`OFFICER_NAME`, `OFFICER_ID`, `PH_NUM`, `BLO_NUM`) VALUES ([value-1],[value-2],[value-3],[value-4])";

 $query = mysqli_query($con,$q);
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Insert Operation </h1>
 </div><br>

 <label> OFFICER NAME</label>
 <input type="text" name="OFFICER_NAME" class="form-control"> <br>

 <label> OFFICER_ID </label>
 <input type="text" name="OFFICER_ID" class="form-control"> <br>
 
 <label> PHONE NUMBER </label>
 <input type="text" name="PH_NUM" class="form-control"> <br>
 
 <label> WARD NUMBER </label>
 <input type="text" name="BLO_NUM" class="form-control"> <br>

 <label> PATIENT NUMBER </label>
 <input type="text" name="PAT_ID" class="form-control"> <br>


 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>