<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
.bg-img {
  /* The image used */
  background-image: url("hosp.jpg");

  min-height: 712px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  
  /* Needed to position the navbar */
  position: relative;
}

.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: red;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>
<div class="bg-img">
<div class="navbar">
<a href="warddisp.php">Ward</a>
  <a href="phc_docdisp.php">Doctors</a>
  <div class="subnav">
    <button class="subnavbtn">Patients <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="phc_homedisp.php">Home Quarentined</a>
      <a href="phc_hospdisp.php">Hospital Quarentined</a>
      <a href="patdisp.php">Patient Details</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Primary Health center (PHC) <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="hospinfo.php">Hospitals</a>
      <a href="phc_swabdisp.php">Swab colloectors</a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Warroom<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="empdisp.php">Employees</a>
      <a href="blodisp.php">BLOs</a>
      <a href="regdisp.php">New registration</a>
      
    </div>
  </div>
  <a href="MAIN.html">LOGOUT</a>
</div>
</div>
</body>
</html>
