<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title> Group7B-Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  
</head>
<body>
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="salary_emp.php">Group7B-Pharmacy - Salary Managment</a>
  
    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
      aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
  
      <!-- Links -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="salary_emp.php">Time Tracker
            <span class="sr-only">(current)</span>
          </a>
        </li>

        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="salary_leave.php">Request Leave
              <span class="sr-only">(current)</span>
            </a>
          </li>

    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
  <br><br>
 <!--TIME TRACKER-->

<div class="row" style="padding-left: 450px">
    <div class="col-md-5"><h2>Request for a leave</h2>  
      <br>    
      <!-- Extended default form grid -->
      <form id="leaveForm" name="leaveForm" method="POST">
        <!-- Grid row -->
        <div  class="md-form" style="max-width: 400px">
            <input name="ldate" type="date" id="ldate" class="form-control">
            <label for="inputMDEx">Choose your date</label>
           
        </div>
        <div class="form-row">
          <!-- Default input -->
          <div class="form-group col-md-6">
            <label for="inputEmail4">Employee ID</label>
            <input name="eid" id="eid" type="text" class="form-control" placeholder="EMPID">
          </div>
         
        <!-- Grid row -->
      
        <!-- Default input -->
        <div class="form-group">
          <label for="inputAddress">Leave Type</label><br>
          <input type="radio" name="type" id="type" value="Full Day"> Full Day<br>
          <input type="radio" name="type" id="type" value="Half Day"> Half Day<br>
        </div>
        <!-- Default input -->
        <div class="form-group">
          <label for="inputAddress2">Reason</label>
          <input name="reason" id="reason" type="text" class="form-control" placeholder="why?">
        </div>
        <!-- Grid row -->
        <div class="form-row">
          <!-- Default input -->
          <div class="form-group col-md-6">
            <label for="inputCity">Email</label>
            <input name="e_mail" type="email" class="form-control" id="e_mail" placeholder="Email">
          </div>
          <!-- Default input -->
          <div class="form-group col-md-6">
            <label for="inputZip">Contact Number</label>
            <input name="cnum" type="text" class="form-control" id="cnum" placeholder="xxxxxxxxxx">
          </div>
        </div>
        <!-- Grid row -->
        <button type="submit" name="lrequest" class="btn btn-primary btn-md" onclick="javascript: return empLeaveValidation();" >REGISTER</button>
      </form>
      <!-- Extended default form grid --></div> 
    </div>

  <?php


if(isset($_POST['lrequest'])){

  $lDate = $_POST['ldate'];
  $eId = $_POST['eid'];
  $Type = $_POST['type'];
  $Reason = $_POST['reason'];
  $Email = $_POST['e_mail'];
  $cNum = $_POST['cnum'];

  $sql = "INSERT INTO salary_leave (date,empID,type,reason,email,cnum)
  VALUES ('$lDate','$eId','$Type','$Reason','$Email','$cNum')";

  if ($conn->query($sql) === TRUE) {
      echo "New record Inserted successfully";
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
} 
?>     
 <!--
   
CREATE TABLE salary_leave(
    
leaveId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date DATE NOT NULL,
empID VARCHAR(30) NOT NULL,
type VARCHAR(30) NOT NULL,
reason VARCHAR(50) NOT NULL,
email VARCHAR(30) NOT NULL,
cnum INT(10) NOT NULL,
status VARCHAR(30) NOT NULL,
req_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
) -->
             
  <!--    Footer start-->

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Group7B-Pharmacy</h6>
 
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

 

      <hr class="w-100 clearfix d-md-none">

 

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i>Group7B-Pharmacy</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> Group7B-Pharmacy@.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> +44 1234567890</p>
       </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2023 Copyright:
          <a href="https://mdbootstrap.com/education/bootstrap/">
            <strong>Group7B-Pharmacy</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

<!--Ens of the footer-->        




<!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/mdb.js"></script>
  <script type="text/javascript" src="js/salary.js"></script>
</body>

</html>