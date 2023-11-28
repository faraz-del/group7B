<?php
include "connection.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("SELECT id, password FROM customer WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify the password using password_verify
        if (password_verify($password, $hashed_password)) {
            $_SESSION['login_user'] = $email;
            header("location: delivery.php");
        } else {
            $error = "Invalid Password";
        }
    } else {
        $error = "Invalid Email";
    }

    $stmt->close();
}

$conn->close();
?>
