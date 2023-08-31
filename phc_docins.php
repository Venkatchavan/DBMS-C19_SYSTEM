<?php

 

include 'phc_swabcon.php';

 

if(isset($_POST['done'])){

 

 $HOSPITAL_NAME = $_POST['HOSPITAL_NAME'];
 $HOSP_ID = $_POST['HOSP_ID'];
 $DOC_NAME = $_POST['DOC_NAME'];
 $DOC_ID = $_POST['DOC_ID'];
 $DOC_PHNUM = $_POST['DOC_PHNUM'];

 

 $q = " INSERT INTO `phc_doctors`(`HOSPITAL_NAME`, `DOC_NAME`,'DOC_ID','DOC_PHNUM','HOSP_ID') VALUES ( '$HOSPITAL_NAME', '$DOC_NAME','$DOC_ID','$DOC_PHNUM','$HOSP_ID' )";

 

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

 

 <label> HOSPITAL_NAME: </label>
 <input type="text" name="HOSPITAL_NAME" class="form-control"> <br>

 

<label> HOSP_ID: </label>
 <input type="text" name="HOSP_ID" class="form-control"> <br>

 

 <label> DOC_NAME: </label>
 <input type="text" name="DOC_NAME" class="form-control"> <br>

 

 <label> DOC_ID: </label>
 <input type="text" name="DOC_ID" class="form-control"> <br>

 

 <label> DOC_PHNUM: </label>
 <input type="text" name="DOC_PHNUM" class="form-control"> <br>

 

 

 

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 

 </div>
 </form>
 </div>
</body>
</html>