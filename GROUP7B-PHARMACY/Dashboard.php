<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Admin Panel | Group7B-Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/adminpanel.css" rel="stylesheet">
  <link href="scss/_custom-styles.scss" rel="stylesheet">

</head>

<body background="bg3.jpg">
  <!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark primary-color">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="index.php">Group7B-Pharmacy</a>
  
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
          <a class="dropdown-item" href="employeeonereport.php">Employee Report</a>
          <a class="dropdown-item" href="customerreport.php">Customer Details Reports</a>
          <a class="dropdown-item" href="expenditurereport.php">Expenditure Report</a>
          <a class="dropdown-item" href="StockReports.php">Stock Report</a>
          
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
  
<!--/.Navbar-->

<!--End of the header-->



<table class="panel-table-1">

  <tr>
    <th>
      <div class="card1">
        <h5 class="card-header h5">Customer Details</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#!" class="btn btn-primary">Report</a>
        </div>
      </div>      
    </th>

    <th>
      <div class="card1">
        <h5 class="card-header h5">Employee Details</h5>
        <div class="card-body">
          <h5 class="card-title">All the Details of the Employees !</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="addEmployee.php" class="btn btn-primary">ADD</a>
          <a href="EmployeeReportPDF.php" class="btn btn-primary">Report</a>
          </form>
          
        </div>
      </div>    
    </th>

    <th>
      <div class="card1">
        <h5 class="card-header h5">Stock Details</h5>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="Stock.php" class="btn btn-primary">VIEW</a>
        </div>
      </div>    
    </th>

  </tr>
  
  <tr>
      <th>
        <div class="card1">
          <h5 class="card-header h5">Expenditure Details</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="Expenditure.php" class="btn btn-primary">VIEW</a>
            <a href="#!" class="btn btn-primary">BILLS</a>
            <a href="#!" class="btn btn-primary">REPORTS</a>
          </div>
        </div>      
      </th>
  
      <th>
        <div class="card1">
          <h5 class="card-header h5">Salary Details</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="salary_dashboard.php" class="btn btn-primary">VIEW</a>
            <a href="#!" class="btn btn-primary">REPORTS</a>
            <a href="salary_emp.php" class="btn btn-primary">Tracker</a>
          </div>
        </div>    
      </th>
  
      <th>
        <div class="card1">
          <h5 class="card-header h5">Sales Details</h5>
          <div class="card-body">
            <h5 class="card-title">Special title treatment</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="Cashier.php" class="btn btn-primary">Cashier</a>
    
          </div>
        </div>    
      </th>
  
    </tr>

    <tr>
      <th>
          <div class="card1">
              <h5 class="card-header h5">Delivery Details</h5>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="webAdmin/index.php" class="btn btn-primary">VIEW</a>
                <a href="#!" class="btn btn-primary">REPORTS</a>
              </div>
            </div>    
      </th>
      <th>
          <div class="card1">
              <h5 class="card-header h5">Supplier Management</h5>
              <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="Supplier.php" class="btn btn-primary">VIEW</a>
                
              </div>
            </div>    
      </th>

      
    </tr>
    

  
</table>

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
          <p>Get the treatment you need without leaving your home. With a wide range of medicines at great prices we're sure to ease your ailment with signed for delivery.Choose a safe, quick, cost-effect and convenient way of having your medicines delivered to your door.</p>
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
            <i class="fas fa-home mr-3"></i> Group7B-Pharmacy</p>
          <p>
            <i class="fas fa-envelope mr-3"></i> Group7B-Pharmacy.com</p>
          <p>
            <i class="fas fa-phone mr-3"></i> +44 1234567890</p>
          <p>
          <i class="fas fa-map-marker-alt"></i><a href ="location.php"> Find Us</p></a>
          <p>
          
          
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
</body>

</html>