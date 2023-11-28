

<?php
session_start();

if (isset($_POST['SIGN'])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];

    $conn = new mysqli("localhost", "root", "", "nimedco-pharmacy");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $UserName = $conn->real_escape_string($UserName);
    $Password = $conn->real_escape_string($Password);

    $sql = "SELECT * FROM employee WHERE UserName = '$UserName' AND Password = '$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        header("location: Dashboard.php");
    } else {
        $_SESSION['message'] = "Invalid User Login !!! Please Enter Valid User Login !!!";
        $_SESSION['msg_type'] = "danger";
        header("location: signIn.php");
    }

    $conn->close();
}
?>
