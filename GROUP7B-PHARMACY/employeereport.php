<?php
namespace Dompdf;

require_once 'dompdf/autoload.inc.php';

include "connection.php";

if (isset($_POST['Addemployeereport'])) {
    $emp_name = $_POST['employeename'];

    $query_emp_details = "SELECT * FROM employee WHERE FirstName='$emp_name'";
    $total_amount_result = $conn->query($query_emp_details) or die($conn->error);

    while ($row = mysqli_fetch_array($total_amount_result)) {
        $firstname = $row['FirstName'];
        $lastname = $row['LastName'];
        $username = $row['UserName'];
        $email = $row['Email'];
        $nicnumber = $row['NICNumber'];
        $address = $row['Address'];
        $phonenumber = $row['PhoneNumber'];
    }

    echo '<script language="javascript">';
    echo 'alert("Report Generate Successfully")';
    echo '</script>';
    
    header("Location:employeeonereport.php?firstname=".$firstname."&lastname=".$lastname."&username=".$username."&email=".$email."&nicnumber=".$nicnumber."&address=".$address."&phoneno=".$phonenumber);
}

if (isset($_POST['Addpdf'])) {
    // Use the fetched values instead of $_POST
    $dompdf = new Dompdf();
    $dompdf->loadHtml('
        <!-- Your HTML content here with the fetched values -->
    ');

    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    $dompdf->stream("", array("Attachment" => false));
    exit(0);
}

?>
