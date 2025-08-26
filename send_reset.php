<?php
include("database.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'] ?? '';

    // Check if the email exists in the database
    $stmt = $connection->prepare("SELECT * FROM login WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        // Generate a token (for example, a random string or a hash)
        $token = bin2hex(random_bytes(16));  // Generates a random 16-byte string

        // Store the token in the database for this user (or use a session)
        $stmt = $connection->prepare("UPDATE login SET reset_token = ? WHERE email = ?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        // Redirect to the password reset page with the token
        header("Location: reset_password.php?email=$email");
        exit();
    } else {
        echo "Email not found.";
    }
}
?>
