<?php

include 'phc_swabcon.php';

if(isset($_POST['done'])){

 $COLL_NAME = $_POST['COLL_NAME'];
 $COLL_ID = $_POST['COLL_ID'];
 $q = " INSERT INTO `phc_swabcollectors`(`COLL_NAME`, `COLL_ID`, `PH_NUM`) VALUES ([value-1],[value-2],[value-3])";

 $query = mysqli_query($con,$q);
}
?>

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

 <label> Collector name </label>
 <input type="text" name="COLL_NAME" class="form-control"> <br>

 <label> CollectorID</label>
 <input type="text" name="COLL_ID" class="form-control"> <br>
 
 <label> PH_NUM </label>
 <input type="text" name="PH_NUM" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>