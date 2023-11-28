<!DOCTYPE html>
<html lang="en">

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
          <a class="nav-link" href="supplierDetails.php">Suppliers</a>
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
    <div class="row">
      <div class="col-md-5"><h2>SUPPLIER DETAILS</h2>  
        <br>    
        <!-- Extended default form grid -->
        <form id="myform2" method="POST">
            <!-- Grid row -->
            <div class="form-row">
              <!-- Default input -->
              <div class="form-group col-md-6">
                  <label for="supplierid">SupplireID</label>
                  <input type="text" class="form-control" id="supplierid" placeholder="SupplireID">
                </div>
                <!-- Default input -->
                <div class="form-group col-md-6">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Name">
                </div>
              </div>
              <!-- Grid row -->
            
              <!-- Default input -->
              <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St">
              </div>
              <!-- Default input -->
              <div class="form-group">
                <label for="brand">Medicine Brand</label>
                <input type="text" class="form-control" id="brand" placeholder="SPC,MPC,ACC">
              </div>
              <!-- Grid row -->
              <div class="form-row">
                <!-- Default input -->
                <div class="form-group col-md-6">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <!-- Default input -->
                <div class="form-group col-md-6">
                  <label for="contact">Contact Number</label>
                  <input type="text" class="form-control" id="contact" placeholder="xxxxxxxxxx">
                </div>
              </div>
            
              <!-- Grid row -->
            <button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateDetailsForm();">UPDATE</button>
            <button type="submit" class="btn btn-danger" onclick="javascript: return validateDetailsForm();">DELETE</button>
            
          </form>
        <!-- Extended default form grid --></div>
      <div class="col-md-1"></div>
      <div class="col-md-6"><h2>SUPPLIERS</h2>  
        <br>    
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">SupplireID
                </th>
                <th class="th-sm">Name
                </th>
                <th class="th-sm">Address
                </th>
                <th class="th-sm">Medicine Brand
                </th>
                <th class="th-sm">Email
                </th>
                <th class="th-sm">Contact
                </th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>S1</td>
                <td>MAdhawa Amarasinghe</td>
                <td>Kuliyapitiya</td>
                <td>Panadol</td>
                <td>madhawa@gmail.com</td>
                <td>0715864875</td>
              </tr>
              <tr>
                <td>S2</td>
                <td>Kasun Thilina</td>
                <td>Horana</td>
                <td>coraxD</td>
                <td>kasun@gmail.com</td>
                <td>07758469257</td>
              </tr>
              <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
              </tr>
              <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
              </tr>
              <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
              </tr>
              <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
              </tr>
              <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
              </tr>
              <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
              </tr>

            </tbody>
            <tfoot>
              <tr>
                <th>Name
                </th>
                <th>Position
                </th>
                <th>Office
                </th>
                <th>Age
                </th>
                <th>Start date
                </th>
                <th>Salary
                </th>
              </tr>
            </tfoot>
          </table>
        <!-- Extended default form grid --></div>
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

      <!-- Grid column -->
  
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
 

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
            <strong> Group7B-Pharmacy</strong>
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

  <script src="js/supvalidation.js"></script>

</body>

</html>