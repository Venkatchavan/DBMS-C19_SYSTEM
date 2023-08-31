<?php

 

include 'phc_swabcon.php';

 

if(isset($_POST['done'])){

 

 $PAT_NAME = $_POST['PAT_NAME'];
 $PAT_ID = $_POST['PAT_ID'];
 $RESULT_DATE= $_POST['RESULT_DATE'];
 $PAT_PHNUM = $_POST['PAT_PHNUM']
 


 $q = " INSERT INTO `tested_negative` (`PAT_NAME`, `PAT_ID`, `PAT_PHNUM`, `RESULT_DATE`) VALUES ([value-1],[value-2],[value-3],[value-4])";

 

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

 

 <label> PAT_NAME: </label>
 <input type="text" name="PAT_NAME" class="form-control"> <br>

 

<label> PAT_ID: </label>
 <input type="text" name="PAT_ID" class="form-control"> <br>

 

 <label> RESULT_DATE </label>
 <input type="text" name="DATE" class="form-control"> <br>
 <label> PAT_PHNUM: </label>
 <input type="text" name="PAT_PHNUM" class="form-control"> <br>

 

<button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 

 </div>
 </form>
 </div>
</body>
</html>