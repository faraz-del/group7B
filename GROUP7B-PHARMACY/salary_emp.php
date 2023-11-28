<!DOCTYPE html>
<html lang="en">
<?php include('connection.php'); ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Group7B-Pharmacy</title>
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
            <a class="nav-link" href="salary_emp_leave.php">Request Leave
              <span class="sr-only">(current)</span>
            </a>
          </li>
       
    
  
  </nav>
  <!--/.Navbar-->
  <br><br>
 <!--TIME TRACKER-->
         <div>
           <form id="form-id"  method="POST">
           <div class="md-form" style="max-width: 400px">
                <input type="text" name="empID" id="empid" class="form-control" required>
                <label for="inputMDEx">Choose your Employee ID</label>               
           </div>
           <br>
           <div class="md-form" style="max-width: 400px">
                <input type="date" name="adate" id="inputMDEx" class="form-control" >
                <label for="inputMDEx">Choose your date</label>
               <!-- <button type="button" class="btn btn-primary">Update Date</button> -->               
           </div>

          <div class="md-form mx-5 my-5" style="max-width: 400px">
                <input type="time" name="itime" id="inputMDEx1" class="form-control">
                <label for="inputMDEx1">Choose your In time</label>
                <button method="POST" type="submit" name="intime" class="btn btn-primary">Update In time</button>
          </div>

          <div class="md-form mx-5 my-5" style="max-width: 400px">
               <input type="time" name="outime" id="inputMDEx2" name="outtime" class="form-control">
               <label for="inputMDEx1">Choose your Out time</label>
               <button method="POST" type="submit" name="outtime" class="btn btn-primary">Update Out time</button>
          </div>
 
          </form>
          </div>
 <?php
if (isset($_POST['outtime'])) 
{
    $otime = $_POST['outime'];
    $eID = $_POST['empID'];
    $date = $_POST['adate'];

    $sql = "UPDATE salary_attendance SET outTime='$otime' WHERE empID='$eID' AND date='$date'";

    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Calculate work time
	$sql1 = "SELECT inTime, empID, outTime FROM salary_attendance WHERE empID='$eID' AND date='$date'";
		$result = $conn->query($sql1);

// Check if the query was successful
if ($result) 
{
    $row = mysqli_fetch_array($result);

    // Check if $row is not null before accessing its values
    if ($row !== null) 
	{
        $inTime = $row['inTime'];
        $outTime = $row['outTime'];

        // Check if inTime and outTime are valid timestamps
        if (strtotime($inTime) !== false && strtotime($outTime) !== false) 
		{
            $worktime = strtotime($outTime) - strtotime($inTime);
            echo "Work time: " . date('H:i:s', $worktime);
        } 
		else 
		{
            echo "Invalid inTime or outTime format";
        }
    } 
	else 
	{
        echo "No records found for the specified empID and date";
    }
} 
else 
{
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}
}

?>



<!--
   
CREATE TABLE salary_attendance(
    
attId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
date DATE NOT NULL,
empID VARCHAR(30) NOT NULL,
inTime TIME NOT NULL,
outTime TIME NOT NULL DEFAULT NULL,
workTime TIME NULL DEFAULT NULL,
updated_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    
) -->

</div>
    <!--Footer start-->

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
 
      <!-- Grid column -->

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