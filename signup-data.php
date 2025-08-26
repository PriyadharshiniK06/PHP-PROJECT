<?php
include 'database.php';

if (isset($_POST['submisson'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO login(EMAIL, PASSWORD) VALUES ('$email', '$password')";
    $result = mysqli_query($connection,$query);

    if ($result) {
        header("Location: home.php");
        exit();
    } else {
        echo "Insertion unsuccessful: " . mysqli_error($connection);
    }
}
?>
