<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Supplier Register | Group7B-Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">

      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  
</head>
<body background="bg3.jpg">
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.html">Group7B-Pharmacy</a>
  
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
          <a class="nav-link" href="Dashboard.php">Dashboard
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Supplier.php">SupplierHome</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registerSupplier.php">Suppliers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Orders.php">Orders</a>
        </li>
  
        <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">Reports</a>
          <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="Summary.php">Summary</a>
            <a class="dropdown-item" href="Reports.php">Add Reports</a>
            
          </div>
        </li>
  
      </ul>
      <!-- Links -->

      
  
      <form class="form-inline my-2 my-lg-0 align-self-stretch">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    <!-- Collapsible content -->
  
  </nav>
  <!--/.Navbar-->
  <br><br>





  
  <div class="container">
    <div class="row"  style="margin-left:300px;">
      <div><h2 style="margin-left:90px;">ADD EMPLOYEE</h2>  
        <br>    
        
        <?php require_once 'addEmployee_process.php';?>

        <?php
        if (isset($_SESSION['message'])):?>

        <div class = "alert alert-<?=$_SESSION['msg_type']?>">

          <?php 
              echo $_SESSION['message'];
              unset($_SESSION['message']);
          ?>
         </div>
         <?php endif ?> 


        <form id="addEmployee" method="POST" action="addEmployee_process.php">
         <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
         <div class="form-group">
            <label for="EmpId">Employee ID</label>
            <input type="text" class="form-control" id="EmpId" value="<?php echo $EmpId;?>" placeholder="Employee ID" name="EmpId">
            <span class="helper-text"></span>
          </div>
          <div class="form-row" >
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="FirstName">First Name</label>
              <input type="text" class="form-control" id="FirstName" value="<?php echo $FirstName; ?>" placeholder="First Name" name="FirstName" >
              <span id="FirstName" class="text-danger font-weight-bold"></span>
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="LastName">Last Name</label>
              <input type="text" class="form-control" id="LastName" value="<?php echo $LastName;?>" placeholder="Last Name" name="LastName">
              <span class="helper-text"></span>
            </div>
          </div>
          <!-- Grid row -->
        
          <!-- Default input -->
          <div class="form-group">
            <label for="UserName">User Name</label>
            <input type="text" class="form-control" id="UserName" value="<?php echo $UserName;?>" placeholder="User Name" name="UserName">
            <span class="helper-text"></span>
          </div>
          <!-- Default input -->
          <div class="form-group">
            <label for="Email">Email</label>
            <input type="email" class="form-control" id="Email" value="<?php echo $Email;?>" placeholder="email" name="Email">
            <span id="Brand" class="text-danger font-weight-bold"></span>
          </div>
          <!-- Grid row -->
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="NICNumber">NIC Number</label>
              <input type="text" class="form-control" id="NICNumber" value="<?php echo $NICNumber;?>" placeholder="NIC Number" name="NICNumber">
              <span class="helper-text"></span>
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="Address">Address</label>
              <input type="text" class="form-control" id="Address" value="<?php echo $Address;?>" placeholder="Address" name="Address">
              <span class="helper-text"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="PhoneNumber">Phone Number</label>
            <input type="text" class="form-control" id="PhoneNumber" value="<?php echo $PhoneNumber;?>" placeholder="xxxxxxxxxxx" name="PhoneNumber">
            <span class="helper-text"></span>
          </div>
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="Password">Password</label>
              <input type="password" class="form-control" id="Password" value="<?php echo $Password;?>" placeholder="Password" name="Password">
              <span class="helper-text"></span>
            </div>
            <!-- Default input -->
            
            <div class="form-group col-md-6">
              <label for="ConfirmPassword">Confirm Password</label>
              <input type="password" class="form-control" id="ConfirmPassword" value="" placeholder="Confirm Password" name="ConfirmPassword">
              <span class="helper-text"></span>
            </div>
            
          </div>
          <?php
          if ($update == true):
          ?>
          <a href="addEmployee.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="UPDATE">UPDATE</button></a>
          <?php else: ?>  
          <a href="addEmployee.php"><button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateaddEmployee();" name="REGISTER">REGISTER</button></a>
          <?php endif; ?>
        </form>
        <!-- Extended default form grid --></div>
     
      <br><br>
      <div style="margin-left:-350px;margin-top:100px"><h2>Employees</h2>  
        <br>

        <?php
          $mysqli = new mysqli('localhost', 'root', '', 'nimedco-pharmacy') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM employee") or die($mysqli->error);
          //pre_r($result);
          ?>    
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">EmpId
                </th>
                <th class="th-sm">FirstName
                </th>
                
                <th class="th-sm">UserName
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm">NICNumber
                </th>
                <th class="th-sm">Address
                </th>
                <th class="th-sm">PhoneNumber
                </th>
                
                <th class="th-sm">Edit
                </th>
                <th class="th-sm">Delete
                </th>
                
              </tr>
            </thead>

            <?php
              while ($row = $result->fetch_assoc()):?>
              
              <tr>
                  <td><?php echo $row['EmpId']; ?></td>
                  <td><?php echo $row['FirstName']; ?></td>
                  
                  <td><?php echo $row['UserName']; ?></td>
                  <td><?php echo $row['Email']; ?></td>
                  <td><?php echo $row['NICNumber']; ?></td>
                  <td><?php echo $row['Address']; ?></td>
                  <td><?php echo $row['PhoneNumber']; ?></td>
                  
                  <td><a href="addEmployee.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                  <td><a href="addEmployee_process.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
                  <?php endwhile; ?>
                
            </table>
      </div>
      <?php
          function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
          }
      ?> 
    </div>
  </div>

<br>
<br>
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

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i>Group7B-Pharmacy</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> group7Bpharmacy.com</p>
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
            <strong> Group7B-Pharmacy.com</strong>
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
  
  <script src="js/addEmployee.js"></script>

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>

<script  type="text/javascript" >
$(document).ready(function () {
       $('dtBasicExample').DataTable();
       $('.dataTables_length').addClass('bs-select');
      });
</script>

</body>

</html>