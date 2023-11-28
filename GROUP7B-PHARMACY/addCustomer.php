

<?php
include "connection.php";

$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$mobleNo = isset($_POST['number']) ? $_POST['number'] : '';
$login_password = isset($_POST['password']) ? $_POST['password'] : '';

// Validate and sanitize input (you should customize this based on your requirements)
$name = filter_var($name, FILTER_SANITIZE_STRING);
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$address = filter_var($address, FILTER_SANITIZE_STRING);
$mobleNo = filter_var($mobleNo, FILTER_SANITIZE_STRING);
$login_password = filter_var($login_password, FILTER_SANITIZE_STRING);

$hash = password_hash($login_password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO customer (name, email, address, mobile, password) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $name, $email, $address, $mobleNo, $hash);

if ($stmt->execute()) {
    header('Location: delivery.php');
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
