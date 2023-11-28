<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Out of Stock | Group7B-Pharmacy</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css"/>

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
        <a class="navbar-brand" href="Dashboard.php">Admin Panel</a>
      
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
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            
      
            <!-- Dropdown -->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Reports</a>
              <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Summary</a>
                <a class="dropdown-item" href="#">Reports Store</a>
                
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="stock.php">Stock</a>
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
  <br>


  <?php
	        $mysqli = new mysqli('localhost', 'root', '', 'nimedco-pharmacy') or die(mysqli_error($mysqli));
        	$result = $mysqli->query("SELECT * FROM stockitem WHERE ItemQuantity = 0 order by id") or die($mysqli->error);
	        //pre_r($result);
        ?>

  <div class="container">
      
          <h2>OUT OF STOCK</h2>
          <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead class="bg-danger" style="color: white;">
                <tr align="center">
                  <th class="th-sm">ItemID
                  </th>
                  <th class="th-sm">ItemName
                  </th>
                  <th class="th-sm">Description
                  </th>
                  <th class="th-sm">Category
                  </th>
                  <th class="th-sm">Price
                  </th>
          
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result->fetch_assoc()): ?>
			          	<tr align="center">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><?php echo $row['ItemName']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['Category']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
				          	
			          	</tr>
			        <?php endwhile; ?>

              </tbody>
              <!--
              <tfoot>
                <tr>
                  <th>ItemID
                  </th>
                  <th>ItemName
                  </th>
                  <th>Description
                  </th>
                  <th>Category
                  </th>
                  <th>Price
                  </th>
                  <th >Action
                  </th>
                </tr>
              </tfoot> -->
            </table>

        </div>
        <div class="container"> <hr>
            <h2>RUNNING OUT OF STOCK</h2>

            <?php
	        $mysqli = new mysqli('localhost', 'root', '', 'nimedco-pharmacy') or die(mysqli_error($mysqli));
        	$result2 = $mysqli->query("SELECT * FROM stockitem WHERE (ItemQuantity <= 10) and (ItemQuantity != 0) order by ItemQuantity") or die($mysqli->error);
	        //pre_r($result);
        ?>

            <table id="dtBasicExample1" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
              <thead class="bg-success" style="color: white;">
                <tr align="center">
                  <th class="th-sm">ItemID
                  </th>
                  <th class="th-sm">ItemName
                  </th>
                  <th class="th-sm">Description
                  </th>
                  <th class="th-sm">Category
                  </th>
                  <th class="th-sm">Price
                  </th>
                  <th class="th-sm">Qty
                  </th>
          
                </tr>
              </thead>
              <tbody>
                
              <?php
		          	while($row = $result2->fetch_assoc()): ?>
			          	<tr align="center">
					          <td><b><?php echo $row['ItemID']; ?></b></td>
                    <td><?php echo $row['ItemName']; ?></td>
                    <td><?php echo $row['Description']; ?></td>
                    <td><?php echo $row['Category']; ?></td>
                    <td><?php echo $row['Price']; ?></td>
                    <td class="bg-warning" style="color: white;"><b><?php echo $row['ItemQuantity']; ?><b></td>
				          	
			          	</tr>
			        <?php endwhile; ?>

              </tbody>
              <!--
              <tfoot>
                <tr>
                  <th>ItemID
                  </th>
                  <th>ItemName
                  </th>
                  <th>Description
                  </th>
                  <th>Category
                  </th>
                  <th>Price
                  </th>
                  <th >Action
                  </th>
                </tr>
              </tfoot> -->
            </table>

        
    </div>
<br><br><br>


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
            <i class="fas fa-envelope mr-3"></i>Group7B-Pharmacy@.com</p>
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

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
    
    
    <script type="text/javascript"> 
        $(document).ready(function () {
$('#dtBasicExample1').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>

<script type="text/javascript"> 
        $(document).ready(function () {
$('#dtBasicExample').DataTable();
$('.dataTables_length').addClass('bs-select');
});
    </script>

    

  </body>
  </html>