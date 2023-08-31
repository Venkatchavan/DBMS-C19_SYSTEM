<?php

 

 include 'phc_swabcon.php';

 

 if(isset($_POST['done'])){

 

 $P_ID = $_GET['PAT_ID'];
 $P_NAME = $_GET['PAT_NAME'];
 $DATE = $_GET['RESULT_DATE'];
 $HOSP_ID = $_POST['HOSP_ID'];
 $BED_NUM = $_POST['BED_NUM'];
 $PAT_PHNUM = $_POST['PAT_PHNUM'];
 $DOC_ID = $_POST['TREATEDBY'];

 

 $q = " UPDATE `phc_hospital` SET `PAT_NAME`=[value-1],`PAT_ID`=[value-2],`PAT_PHNUM`=[value-3],`BED_NUM`=[value-4],`PATS_ID`=[value-5],`TREATEDBY`=[value-6],`RESULT_DATE`=[value-7] WHERE 1";

 

 $query = mysqli_query($con,$q);

 

 header('location:display.php');
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
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>

 

 <label> P_NAME: </label>
 <input type="text" name="PAT_NAME" class="form-control"> <br>

 

 <label> P_ID: </label>
 <input type="text" name="PAT_ID" class="form-control"> <br>

 

 <label> DATE: </label>
 <input type="text" name="RESULT_DATE" class="form-control"> <br>

 
 

 <label> BED_NUM:</label>
 <input type="text" name="BED_NUM" class="form-control"> <br>

 

<label> PAT_PHNUM: </label>
 <input type="text" name="PAT_PHNUM" class="form-control"> <br>

 

 <label> DOC_ID:</label>
 <input type="text" name="TREATEDBY" class="form-control"> <br>

 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 

 </div>
 </form>
 </div>
</body>
</html>