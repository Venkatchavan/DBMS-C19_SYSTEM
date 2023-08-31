<?php
include 'phc_swabcon.php';
if(isset($_POST['done'])){
 $P_NAME = $_POST['P_NAME'];
 $P_ID = $_POST['P_ID'];
 $DATE = $_POST['DATE'];
 $HOSP_ID = $_POST['HOSP_ID'];
 $BED_NUM = $_POST['BED_NUM'];
 $PAT_PHNUM = $_POST['PAT_PHNUM'];
 $DOC_ID = $_POST['DOC_ID']; 
 $q = " INSERT INTO `phc_hospital`(`P_NAME`,'P_ID','DATE','HOSP_ID','BED_NUM','PAT_PHNUM','DOC_ID') VALUES ( '$P_NAME', '$P_ID','$DATE','$HOSP_ID','$BED_NUM', '$PAT_PHNUM','$DOC_ID')";
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
 <label> P_NAME: </label>
 <input type="text" name="P_NAME" class="form-control"> <br>
<label> P_ID: </label>
 <input type="text" name="P_ID" class="form-control"> <br>
 <label> DATE: </label>
 <input type="text" name="DATE" class="form-control"> <br>
 <label> HOSP_ID: </label>
 <input type="text" name="HOSP_ID" class="form-control"> <br>
 <label> BED_NUM: </label>
 <input type="text" name="BED_NUM" class="form-control"> <br>
<label> PAT_PHNUM: </label>
 <input type="text" name="PAT_PHNUM" class="form-control"> <br>
<label> DOC_ID: </label>
 <input type="text" name="DOC_ID" class="form-control"> <br>
<button class="btn btn-success" type="submit" name="done"> Submit </button><br>
 </div>
 </form>
 </div>
</body>
</html>