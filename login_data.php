<?php
include("database.php");
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"]; 

    $profile_image = "image/profile-login.png";

    // ✅ Check if user exists
    $query = "SELECT * FROM login WHERE EMAIL = '$email'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        $user = mysqli_fetch_assoc($result);

        // ✅ Password Match Check
        if ($user['PASSWORD'] === $password) {
            session_start();
            $_SESSION['email'] = $email;
            $_SESSION['profile_image'] = $profile_image;

            header("Location: home.php");
            exit();
        } else {
            header("Location: signup.html");
            exit();
        }
    } else {
        header("Location: signup.html");
        exit();
    }
}?>