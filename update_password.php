<?php
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $new_password = $_POST['new_password'];

    // Store password in plain text (NOT secure – for testing only)
    $stmt = $connection->prepare("UPDATE login SET password = ? WHERE email = ?");
    $stmt->bind_param("ss", $new_password, $email);

    if($stmt->execute()) {
        echo "<script>alert('Password updated successfully!'); window.location.href='home.php';</script>";
    } else {
        echo "Error updating password.";
    }
}
?>
