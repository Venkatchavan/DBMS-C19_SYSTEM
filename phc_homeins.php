<?php

 

include 'phc_swabcon.php';

 

if(isset($_POST['done'])){

 

 $P_NAME = $_POST['P_NAME'];
 $P_ID = $_POST['P_ID'];
 $DATE = $_POST['DATE'];
 $HOME_ADDRESS = $_POST['HOME_ADDRESS'];
 $HOME_PHNUM = $_POST['HOME_PHNUM'];

 


 $q = " INSERT INTO `phc_home`(`P_NAME`,'P_ID','DATE','HOME_ADDRESS','HOME_PHNUM') VALUES ( '$P_NAME', '$P_ID','$DATE','$HOME_ADDRESS','$HOME_PHNUM' )";

 

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

 

 <label> HOME_ADDRESS: </label>
 <input type="text" name="HOME_ADDRESS" class="form-control"> <br>

 

 <label> HOME_PHNUM: </label>
 <input type="text" name="HOME_PHNUM" class="form-control"> <br>

 

<button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 

 </div>
 </form>
 </div>
</body>
</html>