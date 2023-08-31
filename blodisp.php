<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   <style>
    body {
  background-image: url('bluebg.jpeg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
  .previous {
    background-color: #f1f1f1;
    color: black;
  }
    </style>
</head>
<body>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > BLO-BOOTH LEVEL OFFICERS </h1>
  <p><center> Tracks Home-quarentined Patients</center></p>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 <form method="POST" action="sampdel.php">
 
 <tr class="bg-dark text-white text-center">
 
 
 <th>OFFICER NAME</th>
 <th> OFFICER ID </th>
 <th> PHONE NUMBER</th>
 <th>WARD NUMBER </th>
 <th>PATIENT NUMBER </th>
 <th> Delete </th>
</tr>
<?php
include 'phc_swabcon.php'; 
$q = "SELECT * FROM `warroom_blo`";

$query = mysqli_query($con,$q);

while($res = mysqli_fetch_array($query)){
  echo "
  <tr>
  <td>".$res['OFFICER_NAME']."</td>
  <td>".$res['OFFICER_ID']."</td>
  <td>".$res['PH_NUM']."</td>
  <td>".$res['WARD_NUM']."</td>
  <td>".$res['PAT_ID']."</td>
  <td><a href='blodel.php?rn=$res[OFFICER_ID]'>Delete</td>
  ";
}
?>
 
 
 </table> 
 
 





 <a href="data.php" class="previous">&laquo; BACK</a> 
 
 <div>
 <button class="btn-primary btn"> <a href="bloinsert.html" class="text-white"> INSERT </a> </button>
</div>
 </div>
 </div>