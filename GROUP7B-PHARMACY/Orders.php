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
      <div class="col-md-5" style="margin-left:350px;"><h2>ADD ORDERS</h2>  
        <br>    
        
        <?php require_once 'validateorder.php';?>
<?php
if (isset($_SESSION['message'])):?>

<div class = "alert alert-<?=$_SESSION['msg_type']?>">

  <?php 
      echo $_SESSION['message'];
      unset($_SESSION['message']);
?>
 </div>
 <?php endif ?>
        <form id="myform3" method="POST" action="validateorder.php">
        <input type = "hidden" name = "id" value = "<?php echo $id; ?>">
          <!-- Grid row -->
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="orderid">OrderID</label>
              <input type="text" class="form-control" id="orderid" value="<?php echo $orderid; ?>" placeholder="OrderID" name="orderid">
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="supplierid">SupplireID</label>
              <input type="text" class="form-control" id="supplierid" value="<?php echo $supplierid; ?>" placeholder="SupplireID" name="supplierid">
            </div>
          </div>
          <!-- Grid row -->
        
          <!-- Default input -->
          <div class="form-group">
            <label for="medname">MedName</label>
            <input type="text" class="form-control" id="medname" value="<?php echo $medname; ?>" placeholder="Name of the Medicine" name="medname">
          </div>

          <!-- Grid row -->
          <div class="form-row">
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="qty">QTY</label>
              <input type="text" class="form-control" id="qty" value="<?php echo $qty; ?>" placeholder="Quantity" name="qty">
            </div>
            <!-- Default input -->
            <div class="form-group col-md-6">
              <label for="date">Date</label>
              <input type="text" class="form-control" id="date" value="<?php echo $date; ?>" placeholder="DD/MM/YYYY" name="date">
            </div>
          </div>
		  <?php
          if ($update == true):
          ?>
          <button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateOrderForm();" name="UPDATE">UPDATE</button>
		  <?php else: ?>
          <button type="submit" class="btn btn-primary btn-md" onclick="javascript: return validateOrderForm();" name="ORDER">ADD ORDERS</button>
		  <?php endif; ?>
        </form>
        <!-- Extended default form grid --></div>
      
      <div class="col-md-6" style="margin-left:-660px;margin-top:460px"><h2>ORDERS</h2>  
        
		<?php
          $mysqli = new mysqli('localhost', 'root', '', 'nimedco-pharmacy') or die (mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM orders") or die($mysqli->error);
          //pre_r($result);
          ?>

		
        <!-- Extended default form grid -->
        <table id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th class="th-sm">Order ID
                </th>
                <th class="th-sm">Supplier ID
                </th>
                <th class="th-sm">MED Name
                </th>
                <th class="th-sm">QTY
                </th>
                <th class="th-sm">DATE
                </th>
                <th class="th-sm">Edit
                </th>
                <th class="th-sm">Delete
                </th>
              </tr>
            </thead>
            <tbody>
            <?php
              while ($row = $result->fetch_assoc()):?>
              
              <tr>
                  <td><?php echo $row['orderid']; ?></td>
                  <td><?php echo $row['supplierid']; ?></td>
                  <td><?php echo $row['medName']; ?></td>
                  <td><?php echo $row['qty']; ?></td>
                  <td><?php echo $row['date']; ?></td>
                  <td><a href="Orders.php?edit=<?php echo $row['id']; ?>" class="btn btn-info">Edit</a></td>
                  <td><a href="validateorder.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
              </tr>
                  <?php endwhile; ?>
            </tbody>

          </table>
        <!-- Extended default form grid --></div>
    </div>
  </div>
  
   <?php
          function pre_r( $array ) {
            echo '<pre>';
            print_r($array);
            echo '</pre>';
          }
      ?>  

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
          <i class="fas fa-home mr-3"></i> Group7B-Pharmacy</p>
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

  <script src="js/supvalidation.js"></script>

</body>

</html>